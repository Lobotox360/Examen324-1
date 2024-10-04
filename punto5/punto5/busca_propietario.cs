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
    public partial class busca_propietario : Form
    {
        public busca_propietario()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(); con.ConnectionString = "server=(local);database=BDFabian;Integrated Security=True;";
            SqlDataAdapter ada = new SqlDataAdapter(); ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con; ada.SelectCommand.CommandText = "select xp.ci, xp.apellido, xp.nombre from persona xp, catastro xc where xc.id = '" + txtID.Text + "' and xc.ci = xp.ci";
            DataTable dt = new DataTable();
            ada.SelectCommand.CommandType = CommandType.Text; ada.Fill(dt);
            propiedades.DataSource = dt;
        }

        private void btnVolver_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void busca_propietario_Load(object sender, EventArgs e)
        {

        }
    }
}
