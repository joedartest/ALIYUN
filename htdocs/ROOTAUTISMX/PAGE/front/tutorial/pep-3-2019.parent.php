<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>PEP-3评估量表(家长篇) - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/tutorial?v=<?php echo time() ?>">
<link rel="stylesheet" type="text/css" href="/autism/css/tutorial.detail?v=<?php echo time() ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/page.goTop.php'; ?>

<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_TUTORIAL_ DETAIL WORD">

			<div class="cover">
				<h2>PEP-3自闭症评估量表(家长篇)</h2>
				<div class="info">
					<div class="co">2019年最新版</div>
				</div>
			</div>

			<div class="name"><span><b>此观察报告包括以下五部分</b><i></i></span></div>

			<div class="catalog">
				<ul>
					<li><a href="#p1"><span>(一) 儿童现时发展程度</span></a></li>
					<li><a href="#p2"><span>(二) 诊断类别及程度</span></a></li>
					<li><a href="#p3"><span>(三) 问题行为</span></a></li>
					<li><a href="#p4"><span>(四) 个人自理</span></a></li>
					<li><a href="#p5"><span>(五) 适应行为</span></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>


<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_TUTORIAL_ WORD p1">
			
			<div class="part">
				<a name="p1"></a><div class="aName"></div>
				<div class="name"><span>(一) 儿童现时发展程度</span></div>

				<div class="description">
					与其他没有特殊需要的儿童比较，请估计显示你的孩子在以下各方面的表现：
				</div>

				<div class="list">
					<ul>
						<li>
							<div class="item">
								<div class="num"><span>1</span></div>
								<div class="con">
									<div class="text">
										<span>与一般同龄儿童比较，我的孩子的沟通表现(例如：模仿声音、牙牙学语、跟从指令、与人说话及明白他人说话内容)</span>
										<br>
										<span>约为</span>
										<span><input type="text" name=""></span>
										<span>岁。</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>2</span></div>
								<div class="con">
									<div class="text">
										<span>与一般同龄儿童比较，我的孩子的大小肌肉能力(例如：使用肌肉来活动及使用手部操控物件)</span>
										<br>
										<span>约为</span>
										<span><input type="text" name=""></span>
										<span>岁。</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>3</span></div>
								<div class="con">
									<div class="text">
										<span>与一般年龄儿童比较，我的孩子的社交能力(例如：享受拥抱及谈话、与人交往、合作的玩耍、交朋友及跟随游戏规则)</span>
										<br>
										<span>约为</span>
										<span><input type="text" name=""></span>
										<span>岁。</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>4</span></div>
								<div class="con">
									<div class="text">
										<span>与一般年龄儿童比较，我的孩子的自理能力(例如：进食、饮、穿衣、洗澡和如厕)</span>
										<br>
										<span>约为</span>
										<span><input type="text" name=""></span>
										<span>岁。</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>5</span></div>
								<div class="con">
									<div class="text">
										<span>与一般年龄儿童比较，我的孩子的思考能力(例如：完成砌图、找寻隐藏物件及解决问题)</span>
										<br>
										<span>约为</span>
										<span><input type="text" name=""></span>
										<span>岁。</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>6</span></div>
								<div class="con">
									<div class="text">
										<span>与一般年龄儿童比较，我的孩子的整体能力(所有技巧)</span>
										<br>
										<span>约为</span>
										<span><input type="text" name=""></span>
										<span>岁。</span>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>

			</div>

		</div>
	</div>
</div>



<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_TUTORIAL_ WORD p2">
			
			<div class="part">
				<a name="p2"></a><div class="aName"></div>
				<div class="name"><span>(二) 诊断类别及程度</span></div>

				<div class="description">
					您的孩子是否属于以下问题类别：
				</div>

				<div class="list">
					<ul>
						<li>
							<div class="item" data-name="语言障碍">
								<div class="num"><span>1</span></div>
								<con-type-language ref="conTypeLanguage"></con-type-language>
							</div>
						</li>
						<li>
							<div class="item" data-name="自闭症">
								<div class="num"><span>2</span></div>
								<con-type-autism ref="conTypeAutism"></con-type-autism>
							</div>
						</li>
						<li>
							<div class="item" data-name="情绪困扰">
								<div class="num"><span>3</span></div>
								<con-type-mood ref="conTypeMood"></con-type-mood>
							</div>
						</li>
						<li>
							<div class="item" data-name="学习障碍">
								<div class="num"><span>4</span></div>
								<con-type-study ref="conTypeStudy"></con-type-study>
							</div>
						</li>
						<li>
							<div class="item" data-name="智力迟缓">
								<div class="num"><span>5</span></div>
								<con-type-intellect ref="conTypeIntellect"></con-type-intellect>
							</div>
						</li>
						<li>
							<div class="item" data-name="专注力不足/过度活跃症">
								<div class="num"><span>6</span></div>
								<con-type-adhd ref="conTypeAdhd"></con-type-adhd>
							</div>
						</li>
						<li>
							<div class="item" data-name="亚氏保加症">
								<div class="num"><span>7</span></div>
								<con-type-aristolochia ref="conTypeAristolochia"></con-type-aristolochia>
							</div>
						</li>
						<li>
							<div class="item" data-name="精神分裂症">
								<div class="num"><span>8</span></div>
								<con-type-schizophrenia ref="conTypeSchizophrenia"></con-type-schizophrenia>
							</div>
						</li>
						<li>
							<div class="item" data-name="广泛发展障碍">
								<div class="num"><span>9</span></div>
								<con-type-develop ref="conTypeDevelop"></con-type-develop>
							</div>
						</li>
						<li>
							<div class="item" data-name="蕾特氏症">
								<div class="num"><span>10</span></div>
								<con-type-lays ref="conTypeLays"></con-type-lays>
							</div>
						</li>
					</ul>
				</div>

			</div>

		</div>
	</div>
</div>





<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_TUTORIAL_ WORD p3">
			
			<div class="part">
				<a name="p3"></a><div class="aName"></div>
				<div class="name"><span>(三) 问题行为</span></div>

				<div class="description">
					很多孩子都会出现行为问题，请按照以下各方面，评估你孩子的行为：
				</div>

				<div class="list">
					<ul>
						<li>
							<div class="item">
								<div class="num"><span>1</span></div>
								<div class="con">
									<div class="text">
										<span>缺乏或不适当的眼神接触，缺乏面部表情以及缺乏沟通上的身体语言</span>
									</div>
									<radio-3-1 ref="radio31"></radio-3-1>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>2</span></div>
								<div class="con">
									<div class="text">
										<span>语言发育迟缓或完全不会说话</span>
									</div>
									<radio-3-2 ref="radio32"></radio-3-2>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>3</span></div>
								<div class="con">
									<div class="text">
										<span>经常投入在一个或多个重复的兴趣或活动，兴趣异常强烈，或者兴趣过分狭窄</span>
									</div>
									<radio-3-3 ref="radio33"></radio-3-3>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>4</span></div>
								<div class="con">
									<div class="text">
										<span>不能入其他同龄孩子一样发展友谊</span>
									</div>
									<radio-3-4 ref="radio34"></radio-3-4>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>5</span></div>
								<div class="con">
									<div class="text">
										<span>有适当的言语，但不能主动与人展开对话或与人保持对话</span>
									</div>
									<radio-3-5 ref="radio35"></radio-3-5>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>6</span></div>
								<div class="con">
									<div class="text">
										<span>坚持某个、某些重复而没有实际功能的常规或仪式</span>
									</div>
									<radio-3-6 ref="radio36"></radio-3-6>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>7</span></div>
								<div class="con">
									<div class="text">
										<span>不会自发的与人分享开心的活动、有趣的食物或者成功的事情</span>
									</div>
									<radio-3-7 ref="radio37"></radio-3-7>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>8</span></div>
								<div class="con">
									<div class="text">
										<span>使用重复或古怪的语言</span>
									</div>
									<radio-3-8 ref="radio38"></radio-3-8>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>9</span></div>
								<div class="con">
									<div class="text">
										<span>出现重复的身体活动，例如拍打或摆动手、手指，扭曲身体或作出复杂的身体动作</span>
									</div>
									<radio-3-9 ref="radio39"></radio-3-9>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>10</span></div>
								<div class="con">
									<div class="text">
										<span>与人沟通时，不表达自己感受或不回有应别人所表达的情绪</span>
									</div>
									<radio-3-10 ref="radio310"></radio-3-10>
								</div>
							</div>
						</li>

					</ul>
				</div>

			</div>

		</div>
	</div>
</div>




<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_TUTORIAL_ WORD p4">
			
			<div class="part">
				<a name="p4"></a><div class="aName"></div>
				<div class="name"><span>(四) 个人自理</span></div>

				<div class="description">
					读完每一条后，请选择最能表达你孩子情况的句子：
				</div>

				<div class="list">
					<ul>
						<li>
							<div class="item">
								<div class="num"><span>1</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-1 ref="radio41"></radio-4-1>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>2</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-2 ref="radio42"></radio-4-2>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>3</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-3 ref="radio43"></radio-4-3>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>4</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-4 ref="radio44"></radio-4-4>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>5</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-5 ref="radio45"></radio-4-5>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>6</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-6 ref="radio46"></radio-4-6>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>7</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-7 ref="radio47"></radio-4-7>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>8</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-8 ref="radio48"></radio-4-8>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>9</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-9 ref="radio49"></radio-4-9>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>10</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-10 ref="radio410"></radio-4-10>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>11</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-11 ref="radio411"></radio-4-11>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>12</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-12 ref="radio412"></radio-4-12>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>13</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-4-13 ref="radio413"></radio-4-13>
								</div>
							</div>
						</li>

					</ul>
				</div>

			</div>

		</div>
	</div>
</div>





<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_TUTORIAL_ WORD p5">
			
			<div class="part">
				<a name="p5"></a><div class="aName"></div>
				<div class="name"><span>(五) 适应行为</span></div>

				<div class="description">
					读完每一条后，请选择最能表达你孩子情况的句子：
				</div>

				<div class="list">
					<ul>
						<li>
							<div class="item">
								<div class="num"><span>1</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-1 ref="radio51"></radio-5-1>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>2</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-2 ref="radio52"></radio-5-2>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>3</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-3 ref="radio53"></radio-5-3>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>4</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-4 ref="radio54"></radio-5-4>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>5</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-5 ref="radio55"></radio-5-5>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>6</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-6 ref="radio56"></radio-5-6>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>7</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-7 ref="radio57"></radio-5-7>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>8</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-8 ref="radio58"></radio-5-8>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>9</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-9 ref="radio59"></radio-5-9>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>10</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-10 ref="radio510"></radio-5-10>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>11</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-11 ref="radio511"></radio-5-11>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>12</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-12 ref="radio512"></radio-5-12>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>13</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-13 ref="radio513"></radio-5-13>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>14</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-14 ref="radio514"></radio-5-14>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="num"><span>15</span></div>
								<div class="con">
									<div class="text">
										<span>00000000</span>
									</div>
									<radio-5-15 ref="radio515"></radio-5-15>
								</div>
							</div>
						</li>

					</ul>
				</div>

			</div>

		</div>
	</div>
</div>






<div style="height:1500px;">


<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script src="/autism/js/front/tutorial/pep3.2019.parent?<?php echo time() ?>"></script>
</body>
</html>