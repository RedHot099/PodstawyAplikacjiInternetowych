﻿using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Security.Cryptography.X509Certificates;
using System.Web;

namespace MVC.Models
{
    public class Song
    {
        public int Id { get; set; }
        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Name { get; set; }
        public string Artist { get; set; }
        public int GenreId { get; set; }
    }

}