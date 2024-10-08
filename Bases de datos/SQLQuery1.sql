USE [master]
GO
/****** Object:  Database [BDFabian]    Script Date: 04/10/2024 02:03:04 p. m. ******/
CREATE DATABASE [BDFabian]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'BDFabian', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL11.MSSQLSERVER\MSSQL\DATA\BDFabian.mdf' , SIZE = 5120KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'BDFabian_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL11.MSSQLSERVER\MSSQL\DATA\BDFabian_log.ldf' , SIZE = 2048KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [BDFabian] SET COMPATIBILITY_LEVEL = 110
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [BDFabian].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [BDFabian] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [BDFabian] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [BDFabian] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [BDFabian] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [BDFabian] SET ARITHABORT OFF 
GO
ALTER DATABASE [BDFabian] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [BDFabian] SET AUTO_CREATE_STATISTICS ON 
GO
ALTER DATABASE [BDFabian] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [BDFabian] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [BDFabian] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [BDFabian] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [BDFabian] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [BDFabian] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [BDFabian] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [BDFabian] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [BDFabian] SET  DISABLE_BROKER 
GO
ALTER DATABASE [BDFabian] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [BDFabian] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [BDFabian] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [BDFabian] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [BDFabian] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [BDFabian] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [BDFabian] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [BDFabian] SET RECOVERY FULL 
GO
ALTER DATABASE [BDFabian] SET  MULTI_USER 
GO
ALTER DATABASE [BDFabian] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [BDFabian] SET DB_CHAINING OFF 
GO
ALTER DATABASE [BDFabian] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [BDFabian] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
EXEC sys.sp_db_vardecimal_storage_format N'BDFabian', N'ON'
GO
USE [BDFabian]
GO
/****** Object:  Table [dbo].[catastro]    Script Date: 04/10/2024 02:03:04 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[catastro](
	[id] [int] NOT NULL,
	[distrito] [varchar](50) NULL,
	[zona] [varchar](50) NULL,
	[superficie] [decimal](10, 2) NULL,
	[xi] [decimal](10, 2) NULL,
	[yi] [decimal](10, 2) NULL,
	[xf] [decimal](10, 2) NULL,
	[yf] [decimal](10, 2) NULL,
	[ci] [bigint] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[persona]    Script Date: 04/10/2024 02:03:04 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[persona](
	[ci] [bigint] NOT NULL,
	[apellido] [varchar](50) NULL,
	[nombre] [varchar](50) NULL,
	[rol] [char](1) NULL,
	[usuario] [varchar](50) NULL,
	[contrasenia] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[ci] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (1001, N'Distrito 1', N'Zona A', CAST(150.50 AS Decimal(10, 2)), CAST(30.50 AS Decimal(10, 2)), CAST(50000.00 AS Decimal(10, 2)), CAST(29.80 AS Decimal(10, 2)), CAST(45.80 AS Decimal(10, 2)), 12345678)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (1002, N'Distrito 4', N'Zona D', CAST(250.90 AS Decimal(10, 2)), CAST(90.50 AS Decimal(10, 2)), CAST(100.60 AS Decimal(10, 2)), CAST(95.50 AS Decimal(10, 2)), CAST(105.80 AS Decimal(10, 2)), 44332211)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (1005, N'Distrito 9', N'Zona I', CAST(195.00 AS Decimal(10, 2)), CAST(190.90 AS Decimal(10, 2)), CAST(200.20 AS Decimal(10, 2)), CAST(195.50 AS Decimal(10, 2)), CAST(205.80 AS Decimal(10, 2)), 88776655)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (2005, N'Distrito 2', N'Zona B', CAST(200.00 AS Decimal(10, 2)), CAST(50.00 AS Decimal(10, 2)), CAST(60.00 AS Decimal(10, 2)), CAST(55.00 AS Decimal(10, 2)), CAST(65.00 AS Decimal(10, 2)), 87654321)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (2006, N'Distrito 5', N'Zona E', CAST(180.30 AS Decimal(10, 2)), CAST(110.80 AS Decimal(10, 2)), CAST(120.90 AS Decimal(10, 2)), CAST(115.70 AS Decimal(10, 2)), CAST(125.60 AS Decimal(10, 2)), 55667788)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (2011, N'Distrito 8', N'Zona H', CAST(275.10 AS Decimal(10, 2)), CAST(170.60 AS Decimal(10, 2)), CAST(180.70 AS Decimal(10, 2)), CAST(175.80 AS Decimal(10, 2)), CAST(185.90 AS Decimal(10, 2)), 99887766)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (3002, N'Distrito 3', N'Zona C', CAST(175.80 AS Decimal(10, 2)), CAST(170.30 AS Decimal(10, 2)), CAST(80.40 AS Decimal(10, 2)), CAST(75.60 AS Decimal(10, 2)), CAST(85.70 AS Decimal(10, 2)), 11223344)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (3009, N'Distrito 6', N'Zona F', CAST(300.20 AS Decimal(10, 2)), CAST(130.10 AS Decimal(10, 2)), CAST(140.20 AS Decimal(10, 2)), CAST(135.30 AS Decimal(10, 2)), CAST(145.40 AS Decimal(10, 2)), 33445566)
GO
INSERT [dbo].[catastro] ([id], [distrito], [zona], [superficie], [xi], [yi], [xf], [yf], [ci]) VALUES (3021, N'Distrito 7', N'Zona H', CAST(225.40 AS Decimal(10, 2)), CAST(150.30 AS Decimal(10, 2)), CAST(160.50 AS Decimal(10, 2)), CAST(155.70 AS Decimal(10, 2)), CAST(165.80 AS Decimal(10, 2)), 22334455)
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (10101010, N'Lobo', N'Fabian', N'A', N'admin', N'admin')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (11223344, N'Perez', N'Carlos', N'U', N'user1', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (12345678, N'Gonzalez', N'Juan', N'U', N'user2', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (22334455, N'Fernandez', N'Luis', N'U', N'user3', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (33445566, N'Ramirez', N'Sofia', N'U', N'user4', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (44332211, N'Lopez', N'Maria', N'U', N'user5', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (55667788, N'Garcia', N'Lucia', N'U', N'user6', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (87654321, N'Martinez', N'Ana', N'U', N'user7', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (88776655, N'Castro', N'Pablo', N'U', N'user8', N'123456')
GO
INSERT [dbo].[persona] ([ci], [apellido], [nombre], [rol], [usuario], [contrasenia]) VALUES (99887766, N'Dias', N'Laura', N'U', N'user9', N'123456')
GO
ALTER TABLE [dbo].[catastro]  WITH CHECK ADD FOREIGN KEY([ci])
REFERENCES [dbo].[persona] ([ci])
GO
USE [master]
GO
ALTER DATABASE [BDFabian] SET  READ_WRITE 
GO
