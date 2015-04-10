# makefile for local-kitchen

USER = gregneme
HOST = workshopri.com

remote = live
branch = master

ssh:
	ssh $(USER)@$(HOST)

deploy:
	git push $(remote) +$(branch):refs/heads/master