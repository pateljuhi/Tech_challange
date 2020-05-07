# Tech_challange
## #1.
Write php code to sanitize the post data from the following form: 

```html
<div class="container">
   <h1 class="well">Registration Form</h1>
   <div class="col-lg-12 well">
       <div class="row">
           <form>
               <div class="col-sm-12">
                   <div class="row">
                       <div class="col-sm-6 form-group">
                           <label>First Name</label>
                           <input type="text" name="firstname" placeholder="Enter First Name Here.." class="form-control">
                       </div>
                       <div class="col-sm-6 form-group">
                           <label>Last Name</label>
                           <input type="text" name="lastname"placeholder="Enter Last Name Here.." class="form-control">
                       </div>
                   </div>
                   <div class="form-group">
                       <label>Address</label>
                       <textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                   </div>
                   <div class="form-group">
                       <label>Phone Number</label>
                       <input name="phone" type="text" placeholder="Enter Phone Number Here.." class="form-control">
                   </div>
                   <div class="form-group">
                       <label>Email Address</label>
                       <input name="email" type="text" placeholder="Enter Email Address Here.." class="form-control">
                   </div>
                   <div class="form-group">
                       <label>Website</label>
                       <input name="website" type="text" placeholder="Enter Website Name Here.." class="form-control">
                   </div>
                   <button type="submit" class="btn btn-lg btn-info">Submit</button>
               </div>
           </form>
       </div>
   </div>
</div>
```


## #2.  
Write a javascript function that takes a string of characters representing a roman numeral and returns the integer value of that roman numeral
 
You can assume that valid roman numerals between 1 and 3999 are passed in and that the input is well-formed (ex. No digits or symbols are passed in the string)
 
If you are unfamiliar with Roman Numerals the below chart will help you map symbols to an integer value:
 
| Symbol | Value |
|--------|-------|
| I      | 1     |
| V      | 5     |
| X      | 10    |
| L      | 50    |
| C      | 100   |
| D      | 500   |
| M      | 1000  |
 
 
Numbers are formed by combining symbols and adding values. So II is two ones, i.e. 2, and XIII is one ten and three ones, i.e. 13. There is no zero in this system, so 207, for example, is CCVII, using the symbols for two hundred, a five and two ones. 1066is MLXVI, one thousand, fifty and ten, a five and a one.
 
However, in a few specific cases, a smaller value symbol may appear before a larger one. In this case, the smaller number is subtracted from the larger number. So IX is I subtracted from X, so 1 subtracted from 10, i.e. 9. CM is C subtracted from M, so 1000-100 = 900.
 
Here are a few more examples:
 
III = 3

IV = 4

XIX= 19

MMXV = 2015

MCMIV = 1904


## #3.
Given the following abstract from a PubMed Article: 

```
AIMS: To compare the effect of the direct renin inhibitor aliskiren on neurohumoral activity in heart failure patients treated with low-dose and high-dose ACE inhibitor. 

METHODS: A retrospective analysis of the ALOFT trial. Comparison of the effects of 6 months treatment with aliskiren (versus placebo) in patients receiving <guideline-recommended dose of ACE inhibitor (n = 109) with those receiving ≥ recommended-dose (n = 81). Neurohumoral measures included B-type natriuretic peptide (BNP), NT proBNP, plasma renin activity and urinary aldosterone excretion. 

RESULTS: Patients in each ACE inhibitor-dose group were generally similar (those in the ≥recommended ACE inhibitor-dose had higher baseline blood-pressures and LVEF and were more often female and diabetic). In the <recommended-dose sub-group, the reduction in BNP from baseline to end-of-study was -1% (95% CI -32 to +44%) in the placebo-group and -32% (-1 to -53%) in the aliskiren group. The corresponding reductions in the ≥recommended ACE inhibitor-dose sub-group were: placebo -19% (-46 to +22%) and aliskiren -46% (-22 to -62%); interaction p-value 0.94. The pattern of results for other neurohumoral markers was similar. 

CONCLUSIONS: Aliskiren causes neurohumoral suppression in heart failure, even in patients treated with ≥recommended-dose of ACE inhibitor. 
```

Write php code to take the above abstract and highlight the following keywords:

* ACE
* dose
* All percentages and numbers


Expected output: https://jsfiddle.net/fLhq0xun/


## #4.
Given table, ResponseSets, where row '23' represent the value of a node in Binary Tree and row '22' is the parent of row '23'


notice the 'id' and 'parent_set_id' column

'article_id' is a foreign key to the Articles table


| id | article_id | form_id | level_id | user_id | time_to_fill_out | parent_set_id |
|----|------------|---------|----------|---------|------------------|---------------|
| 22 | 1          | 1       | 2        | 3312    | 3124             | 0             |
| 23 | 2          | 2       | 2        | 3312    | 456              | 22            |
| 44 | 1          | 2       | 2        | 3312    | 5614             | 23            |
| 67 | 2          | 2       | 2        | 3312    | 1534             | 23            |
| 68 | 2          | 2       | 2        | 3312    | 56584            | 67            |

Given table, Articles

| id | refid   | author                                                   | title                                                                                                                                                  | abstract                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
|----|---------|----------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1  | 1564896 | Qingfen Qiang,Xuewen Wu,Tao Yang,Chunguang Yang,Hong Sun | A comparison between systemic and intratympanic steroid therapies as initial therapy for idiopathic sudden sensorineural hearing loss: a meta-analysis | CONCLUSIONS: Intratympanic steroid (ITS) treatment groups exhibited better outcomes in PTA improvement and recovery rate than systemic steroid therapy (SST) groups. Whether initial hearing loss severity would influence the PTA improvement and recovery rate still requires further research., OBJECTIVE: This article was aimed at evaluating whether intratympanic steroid (ITS) treatment would provide benefits over systemic steroid therapy (SST) as initial therapy in patients with idiopathic sudden sensorineural hearing loss (ISSHL). A meta-analysis was carried out based on published RCTs that included the hearing outcomes of ITS treatment and SST in ISSHL as initial therapy. Both PTA differences and recovery rate were analyzed., METHODS: The literature search was based on the online database including Pubmed, Embase, and Cochrane trails, which completed in July 2016. This study extracted the relevant data following the selection criteria. Mean difference (MD) of PTA differences and Odds ratio (OR) of recovery rate were calculated within 95% confidence intervals., RESULTS: Six eligible articles were reviewed. The pooled MDs of PTA differences was 3.42 (95% CI=0.17-6.67, p=.04) and the pooled ORs of recovery rate was 2.05 (95% CI=1.38-3.03, p=.0003), which indicated that ITS treatment yielded better PTA improvement than SST. Sub-group analyses based on the initial hearing loss were also conducted; however, the difference was insignificant according to our analysis results (p=.82 for PTA improvement and p=.26 for recovery rate) |
| 2  | 6156165 | G. Dreier,J. Lohler                                      | [Evidence and Evidence Gaps - an Introduction]                                                                                                         | BACKGROUND: Treating patients requires the inclusion of existing evidence in any health care decision, to be able to choose the best diagnosis or treatment measure or to make valid prognosis statements for a particular patient in consideration of the physician's own expertise.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |


### a. Write a MySQL query to find all root node in the ResponseSets. 
Sample Output: 

| Root |
|------|
| 22   |

### b. Write a query to find the node type of Binary Tree. Categorize the node based on the following:

Root: If node has no parent.

Leaf: If node has no child.

Inner: If node is neither root nor leaf node.

Sample output: 

| Set | Type  |
|-----|-------|
| 22  | Root  |
| 23  | Inner |
| 44  | Leaf  |

### c. Given the root node, write a MySQL query to find all child nodes associated with the root. 
Sample Output:

| Root | Children       |
|------|----------------|
| 22   | 23, 44, 67, 68 |


### d. BONUS: Given the root node, write a MySQL query to find the total time to fill out of all child nodes including the root, grouped by Article author.
Sample Output:

| Root | Author                                                   | Time_to_fill_out |
|------|----------------------------------------------------------|------------------|
| 22   | Qingfen Qiang,Xuewen Wu,Tao Yang,Chunguang Yang,Hong Sun | 8738             |
| 22   | G. Dreier,J. Lohler                                      | 58574            |

