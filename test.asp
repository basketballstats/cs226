<!DOCTYPE html>
<html>
<body>
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "c:/webdata/TESTDATABASE1.accb"
%></body>
</html>
