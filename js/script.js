
let property = document.querySelectorAll('.property');
let propertyNumbers = 0;
function  propertyText(index)
{
property.forEach((item, i) => {
item.style.transform = `translateY(${(i - index)* 100}%)`;
});
};

setInterval( () =>
{
propertyNumbers = (propertyNumbers < property.length -1) ?  propertyNumbers +1:0;
propertyText(propertyNumbers);
},5000);

propertyText(propertyNumbers);