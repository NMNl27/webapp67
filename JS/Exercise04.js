/*const random_hex_color_code = () => let n = (Math.random() * 0xfffff * 1000000).toString(16);
    return '#' + n.slice(0,6);*/

const random_hex_color_code = () => {
    
    const n = Math.floor(Math.random() * 0xFFFFFF);
        
    const hexString = n.toString(16).padStart(6, '0');
        
        return '#' + hexString;
};

document.body.style.backgroundColor = random_hex_color_code();

    