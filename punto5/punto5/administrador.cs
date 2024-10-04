using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace punto5
{
    public partial class administrador : Form
    {
        DataSet ds = new DataSet();
        SqlDataAdapter adaPersona;
        SqlDataAdapter adaCatastro;

        public void datosCatastro() 
        {
            SqlConnection con = new SqlConnection("server=(local);database=BDFabian;Integrated Security=True;");
            adaCatastro = new SqlDataAdapter("select id, distrito, zona, superficie, xi, yi, xf, yf from catastro", con);
            SqlCommandBuilder builderCatastro = new SqlCommandBuilder(adaCatastro);
            adaCatastro.Fill(ds, "catastro");
        }

        public void datosPersona()
        {
            SqlConnection con = new SqlConnection("server=(local);database=BDFabian;Integrated Security=True;");
            adaPersona = new SqlDataAdapter("select ci, apellido, nombre from persona where rol like 'U'", con);
            SqlCommandBuilder builderPersona = new SqlCommandBuilder(adaPersona);
            adaPersona.Fill(ds, "persona");
        }

        public administrador()
        {
            InitializeComponent();
            datosPersona();
            datosCatastro();
        }

        private void btncatastro_Click(object sender, EventArgs e)
        {
         
            if(ds.Tables["catastro"].Rows.Count == 0) datosCatastro();
            administracion.DataSource = ds;
            administracion.DataMember = "catastro";

        }

        private void btnpersona_Click(object sender, EventArgs e)
        {

            if (ds.Tables["persona"].Rows.Count == 0) datosPersona();
            administracion.DataSource = ds;
            administracion.DataMember = "persona";
            
        }

        private void btnAgregarC_Click(object sender, EventArgs e)
        {
            agregar form3 = new agregar(ds, administracion);
            form3.Show();
        }

        private void btnModificar_Click(object sender, EventArgs e)
        {
            try
            {
                if (administracion.DataMember == "catastro")
                {
                    adaCatastro.Update(ds, "catastro");
                    MessageBox.Show("Datos de 'catastro' guardados correctamente.");
                }
                else if (administracion.DataMember == "persona")
                {
                    adaPersona.Update(ds, "persona"); 
                    MessageBox.Show("Datos de 'persona' guardados correctamente.");
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error al guardar los datos: " + ex.Message);
            }
        }


        private void btneliminar_Click(object sender, EventArgs e)
        {
            eliminar form3 = new eliminar(ds, administracion);
            form3.Show();
        }



        private void btnBPP_Click(object sender, EventArgs e)
        {
            busca_propiedad form3 = new busca_propiedad();
            form3.Show();
        }

        private void btnBP_Click(object sender, EventArgs e)
        {
            busca_propietario form3 = new busca_propietario();
            form3.Show();
        }

        private void btnSalir_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void administracion_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e) { }

        private void Form3_Load(object sender, EventArgs e)
        {
        }

    }
}
