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
    public partial class SearchMembers : Form
    {
        public SearchMembers()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            using (SqlConnection con = new SqlConnection(@"Data Source = MJOLLNIR\LOCALHOST; Initial Catalog = gym; Integrated Security = True; Connect Timeout = 30; Encrypt = False; TrustServerCertificate = False; ApplicationIntent = ReadWrite; MultiSubnetFailover = False"))
            {

                string str = "SELECT * FROM members WHERE f_name = '" + textBox1.Text + "'";
                SqlCommand cmd = new SqlCommand(str, con);
                SqlDataAdapter da = new SqlDataAdapter(cmd);
                DataTable dt = new DataTable();
                da.Fill(dt);

                dataGridView1.DataSource = new BindingSource(dt, null);
            }
            
            textBox1.Text = "";
        }

        private void SearchMembers_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'gymDataSet.members' table. You can move, or remove it, as needed.
            
            using (SqlConnection con = new SqlConnection(@"Data Source = MJOLLNIR\LOCALHOST; Initial Catalog = gym; Integrated Security = True; Connect Timeout = 30; Encrypt = False; TrustServerCertificate = False; ApplicationIntent = ReadWrite; MultiSubnetFailover = False"))
            {

                string str = "SELECT * FROM members";
                SqlCommand cmd = new SqlCommand(str, con);
                SqlDataAdapter da = new SqlDataAdapter(cmd);
                DataTable dt = new DataTable();
                da.Fill(dt);

                dataGridView1.DataSource = new BindingSource(dt, null);
            }
        }
    }
}
