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
    public partial class Equipment : Form
    {
        public Equipment()
        {
            InitializeComponent();
        }
        SqlConnection con = new SqlConnection(@"Data Source = MJOLLNIR\LOCALHOST; Initial Catalog = gym; Integrated Security = True; Connect Timeout = 30; Encrypt = False; TrustServerCertificate = False; ApplicationIntent = ReadWrite; MultiSubnetFailover = False");
        private void button1_Click(object sender, EventArgs e)
        {
            
            con.Open();
            
            try
            {
                string str = " INSERT INTO equipment(name,description,used,cost) VALUES('" + textBox1.Text + "','" + textBox2.Text + "','" + textBox3.Text + "','" + textBox4.Text + "'); ";

                SqlCommand cmd = new SqlCommand(str, con);
                cmd.ExecuteNonQuery();

                string str1 = "select max(eqp_id) from equipment;";

                SqlCommand cmd1 = new SqlCommand(str1, con);
                SqlDataReader dr = cmd1.ExecuteReader();
                if (dr.Read())
                {
                    MessageBox.Show("" + textBox1.Text + "'s Equipment Details is Inserted Successfully.. ");
                    this.Hide();
                    
                }
                this.Close();
            }
            catch (SqlException excep)
            {
                MessageBox.Show(excep.Message);
            }
            con.Close();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            ViewEquipment obj2 = new ViewEquipment();
            obj2.ShowDialog();
        }
    }
}
