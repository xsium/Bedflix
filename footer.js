const currentYear = new Date().getFullYear();
document.querySelector("footer").innerHTML = `
    <div class=footContent>
      <p>&copy; ${currentYear} Tyrfing's Bedflix</p>
    </div>
    
`;
