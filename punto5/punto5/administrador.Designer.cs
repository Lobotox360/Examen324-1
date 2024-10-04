namespace punto5
{
    partial class administrador
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
            this.administracion = new System.Windows.Forms.DataGridView();
            this.btncatastro = new System.Windows.Forms.Button();
            this.btnpersona = new System.Windows.Forms.Button();
            this.btnAgregarC = new System.Windows.Forms.Button();
            this.btnModificar = new System.Windows.Forms.Button();
            this.btneliminar = new System.Windows.Forms.Button();
            this.btnBP = new System.Windows.Forms.Button();
            this.btnBPP = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.btnSalir = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.administracion)).BeginInit();
            this.SuspendLayout();
            // 
            // administracion
            // 
            this.administracion.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.administracion.Location = new System.Drawing.Point(225, 97);
            this.administracion.Name = "administracion";
            this.administracion.RowTemplate.Height = 24;
            this.administracion.Size = new System.Drawing.Size(620, 367);
            this.administracion.TabIndex = 0;
            this.administracion.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.administracion_CellContentClick);
            // 
            // btncatastro
            // 
            this.btncatastro.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btncatastro.Location = new System.Drawing.Point(30, 153);
            this.btncatastro.Name = "btncatastro";
            this.btncatastro.Size = new System.Drawing.Size(156, 56);
            this.btncatastro.TabIndex = 1;
            this.btncatastro.Text = "Catastro";
            this.btncatastro.UseVisualStyleBackColor = true;
            this.btncatastro.Click += new System.EventHandler(this.btncatastro_Click);
            // 
            // btnpersona
            // 
            this.btnpersona.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnpersona.Location = new System.Drawing.Point(30, 225);
            this.btnpersona.Name = "btnpersona";
            this.btnpersona.Size = new System.Drawing.Size(156, 63);
            this.btnpersona.TabIndex = 2;
            this.btnpersona.Text = "Persona";
            this.btnpersona.UseVisualStyleBackColor = true;
            this.btnpersona.Click += new System.EventHandler(this.btnpersona_Click);
            // 
            // btnAgregarC
            // 
            this.btnAgregarC.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAgregarC.Location = new System.Drawing.Point(898, 146);
            this.btnAgregarC.Name = "btnAgregarC";
            this.btnAgregarC.Size = new System.Drawing.Size(157, 63);
            this.btnAgregarC.TabIndex = 3;
            this.btnAgregarC.Text = "Agregar";
            this.btnAgregarC.UseVisualStyleBackColor = true;
            this.btnAgregarC.Click += new System.EventHandler(this.btnAgregarC_Click);
            // 
            // btnModificar
            // 
            this.btnModificar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnModificar.Location = new System.Drawing.Point(898, 233);
            this.btnModificar.Name = "btnModificar";
            this.btnModificar.Size = new System.Drawing.Size(157, 63);
            this.btnModificar.TabIndex = 4;
            this.btnModificar.Text = "Modificar";
            this.btnModificar.UseVisualStyleBackColor = true;
            this.btnModificar.Click += new System.EventHandler(this.btnModificar_Click);
            // 
            // btneliminar
            // 
            this.btneliminar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btneliminar.Location = new System.Drawing.Point(898, 319);
            this.btneliminar.Name = "btneliminar";
            this.btneliminar.Size = new System.Drawing.Size(157, 63);
            this.btneliminar.TabIndex = 5;
            this.btneliminar.Text = "Eliminar";
            this.btneliminar.UseVisualStyleBackColor = true;
            this.btneliminar.Click += new System.EventHandler(this.btneliminar_Click);
            // 
            // btnBP
            // 
            this.btnBP.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnBP.Location = new System.Drawing.Point(643, 533);
            this.btnBP.Name = "btnBP";
            this.btnBP.Size = new System.Drawing.Size(209, 56);
            this.btnBP.TabIndex = 6;
            this.btnBP.Text = "Buscar Propietario";
            this.btnBP.UseVisualStyleBackColor = true;
            this.btnBP.Click += new System.EventHandler(this.btnBP_Click);
            // 
            // btnBPP
            // 
            this.btnBPP.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnBPP.Location = new System.Drawing.Point(240, 533);
            this.btnBPP.Name = "btnBPP";
            this.btnBPP.Size = new System.Drawing.Size(202, 56);
            this.btnBPP.TabIndex = 7;
            this.btnBPP.Text = "Buscar Propiedad";
            this.btnBPP.UseVisualStyleBackColor = true;
            this.btnBPP.Click += new System.EventHandler(this.btnBPP_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(184, 26);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(661, 36);
            this.label1.TabIndex = 8;
            this.label1.Text = "ADMINISTRACIÓN DE CATASTROS LA PAZ";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(25, 97);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(110, 29);
            this.label2.TabIndex = 9;
            this.label2.Text = "TABLAS";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(880, 97);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(199, 29);
            this.label3.TabIndex = 10;
            this.label3.Text = "OPERACIONES";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(447, 496);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(171, 29);
            this.label4.TabIndex = 11;
            this.label4.Text = "BUSQUEDAS";
            // 
            // btnSalir
            // 
            this.btnSalir.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnSalir.Location = new System.Drawing.Point(939, 577);
            this.btnSalir.Name = "btnSalir";
            this.btnSalir.Size = new System.Drawing.Size(156, 56);
            this.btnSalir.TabIndex = 12;
            this.btnSalir.Text = "Salir";
            this.btnSalir.UseVisualStyleBackColor = true;
            this.btnSalir.Click += new System.EventHandler(this.btnSalir_Click);
            // 
            // button1
            // 
            this.button1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.Location = new System.Drawing.Point(40, 496);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(146, 51);
            this.button1.TabIndex = 13;
            this.button1.Text = "Refrescar";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // administrador
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1118, 645);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.btnSalir);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnBPP);
            this.Controls.Add(this.btnBP);
            this.Controls.Add(this.btneliminar);
            this.Controls.Add(this.btnModificar);
            this.Controls.Add(this.btnAgregarC);
            this.Controls.Add(this.btnpersona);
            this.Controls.Add(this.btncatastro);
            this.Controls.Add(this.administracion);
            this.Name = "administrador";
            this.Text = "Form3";
            this.Load += new System.EventHandler(this.Form3_Load);
            ((System.ComponentModel.ISupportInitialize)(this.administracion)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView administracion;
        private System.Windows.Forms.Button btncatastro;
        private System.Windows.Forms.Button btnpersona;
        private System.Windows.Forms.Button btnAgregarC;
        private System.Windows.Forms.Button btnModificar;
        private System.Windows.Forms.Button btneliminar;
        private System.Windows.Forms.Button btnBP;
        private System.Windows.Forms.Button btnBPP;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Button btnSalir;
        private System.Windows.Forms.Button button1;

    }
}