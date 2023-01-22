import sys
from urlextract import URLExtract
n = len(sys.argv)
inputString = sys.argv[1]


extractor = URLExtract()
urls = extractor.find_urls(sys.argv[1])
print(urls)