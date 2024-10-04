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
    public partial class agregar : Form
    {
        DataSet xds = new DataSet();
        DataGridView xdg;
        public agregar()
        {
            InitializeComponent();
        }
        public agregar(DataSet dt, DataGridView dg)
        {
            InitializeComponent();
            this.xds = dt;
            this.xdg = dg;

        }

        private void btnAgregado_Click(object sender, EventArgs e)
        {
            long ci = Convert.ToInt64(txtCI.Text);
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlCommand cmd = new SqlCommand(); cmd.Connection = con;
            cmd.CommandText = "INSERT INTO PERSONA (ci, apellido, nombre, rol) " +
                      "VALUES ('" + ci + "', '" + txtApellido.Text + "', '" + txtNombre.Text + "', 'U');"+
                      "INSERT INTO CATASTRO (id, distrito, zona, superficie, xi, yi, xf, yf, ci) " +
                      "VALUES ('" + txtID.Text + "', '" + txtDistrito.Text + "', '" + txtZona.Text + "', '" + txtSuperficie.Text + "', '" + txtXi.Text + "', '" + txtYi.Text + "', '" + txtXf.Text + "', '" + txtYf.Text + "', '" + ci + "');";
            cmd.CommandType = CommandType.Text;
            con.Open();            
            cmd.ExecuteNonQuery();
            SetDataSet(xds, xdg);
            con.Close();

            this.Close();
        }

        public void SetDataSet(DataSet dataSet, DataGridView dt)
        {
            foreach (DataTable table in dataSet.Tables)
            {
                table.Clear();
            }
            dt.DataSource = null;
            dt.Refresh();
        }

        private void btnVolver_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void agregar_Load(object sender, EventArgs e)
        {

        }
    }
}
