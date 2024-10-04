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
    public partial class busca_propiedad : Form
    {
        public busca_propiedad()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click_1(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlDataAdapter ada = new SqlDataAdapter(); ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con; ada.SelectCommand.CommandText = "select id, distrito, zona, superficie, xi, yi, xf, yf from catastro where ci = '" + txtCI.Text + "'";
            DataTable dt = new DataTable();
            ada.SelectCommand.CommandType = CommandType.Text; ada.Fill(dt);
            propiedades.DataSource = dt;
        }

        private void btnVolver_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void propiedades_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void txtCI_TextChanged(object sender, EventArgs e)
        {

        }


        private void label2_Click(object sender, EventArgs e)
        {

        }

        


    }
}
