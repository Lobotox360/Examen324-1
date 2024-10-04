namespace punto5
{
    partial class eliminar
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.txtID = new System.Windows.Forms.TextBox();
            this.btnEliminar_cat = new System.Windows.Forms.Button();
            this.btnVolver = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            this.txtCI = new System.Windows.Forms.TextBox();
            this.btnEliminar_per = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(175, 34);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(346, 36);
            this.label1.TabIndex = 1;
            this.label1.Text = "ELIMINAR CATASTRO";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(207, 81);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(42, 29);
            this.label3.TabIndex = 3;
            this.label3.Text = "ID:";
            // 
            // txtID
            // 
            this.txtID.Location = new System.Drawing.Point(255, 88);
            this.txtID.Name = "txtID";
            this.txtID.Size = new System.Drawing.Size(227, 22);
            this.txtID.TabIndex = 14;
            // 
            // btnEliminar_cat
            // 
            this.btnEliminar_cat.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnEliminar_cat.Location = new System.Drawing.Point(292, 134);
            this.btnEliminar_cat.Name = "btnEliminar_cat";
            this.btnEliminar_cat.Size = new System.Drawing.Size(144, 46);
            this.btnEliminar_cat.TabIndex = 15;
            this.btnEliminar_cat.Text = "Eliminar";
            this.btnEliminar_cat.UseVisualStyleBackColor = true;
            this.btnEliminar_cat.Click += new System.EventHandler(this.btnEliminar_Click);
            // 
            // btnVolver
            // 
            this.btnVolver.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnVolver.Location = new System.Drawing.Point(530, 401);
            this.btnVolver.Name = "btnVolver";
            this.btnVolver.Size = new System.Drawing.Size(144, 46);
            this.btnVolver.TabIndex = 16;
            this.btnVolver.Text = "Volver";
            this.btnVolver.UseVisualStyleBackColor = true;
            this.btnVolver.Click += new System.EventHandler(this.btnVolver_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(207, 289);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(42, 29);
            this.label2.TabIndex = 17;
            this.label2.Text = "CI:";
            // 
            // txtCI
            // 
            this.txtCI.Location = new System.Drawing.Point(255, 296);
            this.txtCI.Name = "txtCI";
            this.txtCI.Size = new System.Drawing.Size(227, 22);
            this.txtCI.TabIndex = 18;
            // 
            // btnEliminar_per
            // 
            this.btnEliminar_per.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnEliminar_per.Location = new System.Drawing.Point(292, 328);
            this.btnEliminar_per.Name = "btnEliminar_per";
            this.btnEliminar_per.Size = new System.Drawing.Size(144, 46);
            this.btnEliminar_per.TabIndex = 19;
            this.btnEliminar_per.Text = "Eliminar";
            this.btnEliminar_per.UseVisualStyleBackColor = true;
            this.btnEliminar_per.Click += new System.EventHandler(this.btnEliminar_per_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(170, 211);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(329, 36);
            this.label4.TabIndex = 20;
            this.label4.Text = "ELIMINAR PERSONA";
            this.label4.Click += new System.EventHandler(this.label4_Click);
            // 
            // eliminar
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(686, 459);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.btnEliminar_per);
            this.Controls.Add(this.txtCI);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.btnVolver);
            this.Controls.Add(this.btnEliminar_cat);
            this.Controls.Add(this.txtID);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label1);
            this.Name = "eliminar";
            this.Text = "eliminar";
            this.Load += new System.EventHandler(this.eliminar_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtID;
        private System.Windows.Forms.Button btnEliminar_cat;
        private System.Windows.Forms.Button btnVolver;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtCI;
        private System.Windows.Forms.Button btnEliminar_per;
        private System.Windows.Forms.Label label4;
    }
}