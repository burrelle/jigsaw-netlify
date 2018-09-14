---
title: "Refactoring UI - Tables"
author: Evan Burrell
date: 2018-09-14
extends: _layouts.post
section: post
---
Recently, I have been enthralled by Steve Schoger's Refactoring UI series. He and Adam Wathan are coming out with a book in late November or early December and I cannot wait.

I took one of his table examples and tried to make it myself. Here is the result with the source code below, recreated with TailwindCSS.

![Table](/img/RefactoringTable.png)

Source:
```html
<!DOCTYPE html>
<html>
<head>
	<title>Refactoring UI Tables</title>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="container mx-auto pt-4 px-16 py-16 antialiased">
	<table class="w-full shadow-lg rounded">
		<tr class="text-left text-grey-darkest bg-grey-lighter border-b border-grey uppercase">
			<th class="pb-12"></th>
			<th>Name</th>
			<th>Policy</th>
			<th>Location</th>
			<th>Status</th>
			<th></th>
		</tr>
		<tr class="border-b border-grey-light">
			<td class="pt-6 pb-6 text-center">
				<img class="w-10 h-10 rounded-full mr-4" src="https://via.placeholder.com/400x400">
			</td>
			<td>
				<p class="pb-2 text-lg font-bold">Molly Sanders</p>
				<p class="text-sm text-grey font-semibold">VP of Sales</p>
			</td>
			<td>
				<p class="pb-2 text-lg font-bold">$20,000</p>
				<p class="text-sm text-grey font-semibold">All-inclusive Policy</p>
			</td>
			<td>
				<p class="font-semibold text-lg">Denver, CO</p>
			</td>
			<td>
				<span class="bg-green-lighter text-green-dark text-sm font-bold py-1 px-4 rounded-full">
  					Approved
				</span>
			</td>
			<td>
				<svg class="h-12 w-6 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
			</td>
		</tr>
		<tr class="border-b border-grey-light">
			<td class="pt-6 pb-6 text-center">
				<img class="w-10 h-10 rounded-full mr-4" src="https://via.placeholder.com/400x400">
			</td>
			<td>
				<p class="pb-2 text-lg font-bold">Michael Roberts</p>
				<p class="text-sm text-grey font-semibold">Advisory Board</p>
			</td>
			<td>
				<p class="pb-2 text-lg font-bold">$5,000</p>
				<p class="text-sm text-grey font-semibold">Basic Policy</p>
			</td>
			<td>
				<p class="font-semibold text-lg">New York, NY</p>
			</td>
			<td>
				<span class="bg-green-lighter text-green-dark text-sm font-bold py-1 px-4 rounded-full">
  					Approved
				</span>
			</td>
			<td>
				<svg class="h-12 w-6 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
			</td>
		</tr>
		<tr class="border-b border-grey-light">
			<td class="pt-6 pb-6 text-center">
				<img class="w-10 h-10 rounded-full mr-4" src="https://via.placeholder.com/400x400">
			</td>
			<td>
				<p class="pb-2 text-lg font-bold">Devin Childs</p>
				<p class="text-sm text-grey font-semibold">Marketing Manager</p>
			</td>
			<td>
				<p class="pb-2 text-lg font-bold">$5,000</p>
				<p class="text-sm text-grey font-semibold">Basic Policy</p>
			</td>
			<td>
				<p class="font-semibold text-lg">Chicago, IL</p>
			</td>
			<td>
				<span class="bg-yellow-lighter text-sm font-bold py-1 px-4 rounded-full">
  					Awaiting Approval
				</span>
			</td>
			<td>
				<svg class="h-12 w-6 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
			</td>
		</tr>
	</table>
</body>
</html>
```
