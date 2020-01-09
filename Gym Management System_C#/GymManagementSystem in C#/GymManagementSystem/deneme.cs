using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace GymManagementSystem
{
  
    public partial class deneme : Form
    {
       
        public deneme()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e) { 
         string dataSource = "Data Source=MJOLLNIR'\'LOCALHOST;Initial Catalog=gym;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=False;ApplicationIntent=ReadWrite;MultiSubnetFailover=False";
        SqlConnection con = new SqlConnection(dataSource);
            
            string str = "select no from employee where name = 'mert';";
            SqlCommand cmd = new SqlCommand(str, con);
            con.Open();
            SqlDataReader dr;
            dr = cmd.ExecuteReader();
            if (dr.Read())
            {
                textBox1.Text = dr.ToString();
                //  this.Visible = false;
                // Home obj2 = new Home();
                //  obj2.ShowDialog();
            }
        }

    }
}
