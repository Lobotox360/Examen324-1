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
    
    public partial class eliminar : Form
    {
        DataSet xds = new DataSet();
        DataGridView xdg;
        public eliminar()
        {
            InitializeComponent();
        }

        public eliminar(DataSet dt, DataGridView dg)
        {
            InitializeComponent();
            this.xds = dt;
            this.xdg = dg;

        }

        private void btnVolver_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {

            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlCommand cmd = new SqlCommand(); cmd.Connection = con;
            cmd.CommandText = "DELETE FROM CATASTRO WHERE ID = '" + txtID.Text + "'";
            cmd.CommandType = CommandType.Text;
            con.Open();
            cmd.ExecuteNonQuery();
            SetDataSet(xds, xdg);
            con.Close();
            this.Close();
        }


        private void btnEliminar_per_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlCommand cmd = new SqlCommand(); cmd.Connection = con;
            cmd.CommandText = "DELETE FROM PERSONA WHERE CI = '" + txtCI.Text + "'";
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

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }        
        private void eliminar_Load(object sender, EventArgs e)
        {
            
        }
    }
}
