using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace GymManagementSystem
{
    public partial class ViewEquipment : Form
    {
        public ViewEquipment()
        {
            InitializeComponent();
        }

        private void ViewEquipment_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'gymDataSet2.equipment' table. You can move, or remove it, as needed.

            using (SqlConnection con = new SqlConnection(@"Data Source = MJOLLNIR\LOCALHOST; Initial Catalog = gym; Integrated Security = True; Connect Timeout = 30; Encrypt = False; TrustServerCertificate = False; ApplicationIntent = ReadWrite; MultiSubnetFailover = False"))
            {

                string str = "SELECT * FROM equipment ";
                SqlCommand cmd = new SqlCommand(str, con);
                SqlDataAdapter da = new SqlDataAdapter(cmd);
                DataTable dt = new DataTable();
                da.Fill(dt);

                dataGridView1.DataSource = new BindingSource(dt, null);
            }
        }
    }
}
