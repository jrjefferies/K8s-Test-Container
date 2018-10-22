#! /usr/bin/env python

import sys
import requests as req

req_url = 'http://' + sys.argv[1] + '/health.php'
resp = req.get(req_url)
#print('URL: '),req_url,
print('Response: '), resp.text

