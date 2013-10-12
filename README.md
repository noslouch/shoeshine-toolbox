Shoeshine Toolbox
=================

## Tools

### Even or Odd

Outputs 'even' or 'odd' based on a number it receives as a parameter or as tag data. Outputs 'nan' if value is not a number.

**Examples**

`{exp:shoeshine_toolbox:even_or_odd number='4'}`

Outputs the string 'event'

`{exp:shoeshine_toolbox:even_or_odd}5{/exp:shoeshine_toolbox:even_or_odd}`

Outputs the string 'odd'

=====

### Total Segments

Outputs the number of segments in the current URI

**Example**

`{exp:shoeshine_toolbox:total_segments}`

Outputs '2' for http://devot-ee.com/add-ons/shoeshine-toolbox