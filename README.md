Shoeshine Toolbox
=================

## Tools

### Odd or Even

Outputs 'odd' or 'even' based on a number it receives as a parameter or as tag data. Outputs 'nan' if value is not a number.

**Examples**

`{exp:shoeshine_toolbox:odd_or_even number='5'}`

Outputs the string 'odd'

`{exp:shoeshine_toolbox:odd_or_even}4{/exp:shoeshine_toolbox:odd_or_even}`

Outputs the string 'even'

=====

### Total Segments

Outputs the number of segments in the current URI

**Example**

`{exp:shoeshine_toolbox:total_segments}`

Would output '2' for http://devot-ee.com/add-ons/shoeshine-toolbox