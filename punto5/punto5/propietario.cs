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
    public partial class propietario : Form
    {
        private string xci;

        private void datosCatastro()
        {
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlDataAdapter ada = new SqlDataAdapter(); ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con; ada.SelectCommand.CommandText = "select id, distrito, zona, superficie, xi, yi, xf, yf from catastro where '" + xci + "' = ci";
            DataTable dt = new DataTable();
            ada.SelectCommand.CommandType = CommandType.Text; ada.Fill(dt);
            mipropiedad.DataSource = dt;

        }

        public propietario(string ci)
        {
            InitializeComponent();
            this.xci = ci; 
        }
        public propietario()
        {
            InitializeComponent();
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            datosCatastro();
        }

        private void btnSalir_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void mipropiedad_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

    }
}
