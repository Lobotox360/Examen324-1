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
    public partial class Login : Form
    {
        private void datosAlumno()
        {
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlDataAdapter ada = new SqlDataAdapter(); ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con; ada.SelectCommand.CommandText = "select * from ";

        }

        public Login()
        {
            InitializeComponent();
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlCommand cmd = new SqlCommand();
            cmd.Connection = con;
            cmd.CommandText = "select rol, ci from persona where usuario = '" + txtusuario.Text + "' AND contrasenia = '" + txtcontrasenia.Text + "';";
            cmd.CommandType = CommandType.Text;
            con.Open();
            SqlDataReader leer = cmd.ExecuteReader();
            if (leer.Read())  
            {
                if (leer["rol"].ToString() == "U") 
                {
                    MessageBox.Show("Ingreso exitoso.");
                    propietario form2 = new propietario(leer["ci"].ToString());
                    form2.Show();
                    this.Hide();
                }
                else
                {
                    MessageBox.Show("Bienvenido Admin.");
                    administrador form3 = new administrador();
                    form3.Show();
                    this.Hide(); 
                }
            }
            else
            {
                MessageBox.Show("Usuario o contraseña incorrectos.");
            }
            leer.Close();
        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void txtusuario_TextChanged(object sender, EventArgs e)
        {
        
        }

        private void txtcontrasenia_TextChanged(object sender, EventArgs e)
        {
        
        }

        private void Login_Load(object sender, EventArgs e)
        {

        }

    }
}
