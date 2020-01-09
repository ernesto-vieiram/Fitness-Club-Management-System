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
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            
        }

        SqlConnection con = new SqlConnection(@"Data Source = MJOLLNIR\LOCALHOST; Initial Catalog = gym; Integrated Security = True; Connect Timeout = 30; Encrypt = False; TrustServerCertificate = False; ApplicationIntent = ReadWrite; MultiSubnetFailover = False");
        private void button1_Click(object sender, EventArgs e)
        {

            try { 
             con.Open();
            Boolean kullanicivarmi = false;
             string str = "SELECT * FROM employee WHERE emp_username='"+textBox1.Text +"'and password='" + textBox2.Text + "'";
          
             SqlCommand cmd = new SqlCommand(str,con);

             SqlDataReader dr;
             dr = cmd.ExecuteReader();
            while (dr.Read())
            {
                kullanicivarmi = true;
                
            }
            con.Close();
            if (kullanicivarmi)
            {
                MessageBox.Show("Giriş başarılı");

                Home obj = new Home();
                obj.Show();
                this.Hide();
            }
            else
            {
                MessageBox.Show("Giriş başarısız");
            }
            }
            catch(Exception x)
            {
                MessageBox.Show(x.ToString());
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Hide();
            Register obj1 = new Register();
            obj1.ShowDialog();
        }

        
    }
}
