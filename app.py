# -*- coding: utf-8 -*-
import psycopg2
from flask import Flask, request, render_template
app = Flask(__name__)

@app.route('/',methods=['GET','POST'])
def main():
    if request.method=='POST':
        nbdays=request.form['nbdays']
        nbdays=int(nbdays)
        nbmax=request.form['nbmax']
        nbmax=int(nbmax)
        nbmin=request.form['nbmin']
        nbmin=int(nbmin)
        dayn=request.form['dayn']
        dayt=request.form['dayt']
        nom=request.form['nom']
        rate=request.form['rate']
        rate=float(rate)
        offre=request.form['offre']
        offre=int(offre)
        update(nbdays,nbmax,nbmin,dayn,dayt,nom,rate,offre)
        print (nbdays,nbmax,nbmin,dayn,dayt,nom,rate,offre)
        return render_template('app.php')
    if request.method=='GET':
        return render_template('app.php')

def update(nbdays,nbmax,nbmin,dayn,dayt,nom,rate,offre):
    try:
        conn=psycopg2.connect("postgres://ufmqwqytarffyx:96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82@ec2-54-75-224-100.eu-west-1.compute.amazonaws.com:5432/deoaedt1t45duq")
    except:
        print ("echec de connexion")
    cur=conn.cursor()
    try:
        cur.execute("""UPDATE offre SET nbdays=%(nbdays)s,nbmax=%(nbmax)s,nbmin=%(nbmin)s,dayn=%(dayn)s,dayt=%(dayt)s,nom=%(nom)s,rate=%(rate)s WHERE id=%(offre)s""",{"nbdays":nbdays,"nbmax":nbmax,"nbmin":nbmin,"dayn":dayn,"dayt":dayt,"nom":nom,"rate":rate,"offre":offre})
        conn.commit()
    except:
        print ("erreur connexion")
    return True


if __name__ == '__main__':
    app.run()
