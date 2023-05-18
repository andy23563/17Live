<?php
/**
 *
 * @OA\Schema(
 *     schema="ReqNewPosts",
 *     title="",
 *     @OA\Property(
 *          property="title",
 *          type="string",
 *          default="Post Title",
 *          description="文章標題"
 *     ),
 *     @OA\Property(
 *           property="content",
 *           type="string",
 *           default="content",
 *           description="文章內文"
 *       ),
 *     required={"title", "content"}
 * )
 *
 * @OA\Schema(
 *     schema="ReqNewComments",
 *     title="",
 *     @OA\Property(
 *          property="pid",
 *          type="int",
 *          default=1,
 *          description="文章id"
 *     ),
 *     @OA\Property(
 *           property="messages",
 *           type="string",
 *           default="message",
 *           description="文章留言"
 *       ),
 *     required={"pid", "messages"}
 * )
 *
 * @OA\Schema(
 *     schema="ResSuccess",
 *     @OA\Property(
 *         property="msg",
 *         type="string",
 *         default="success",
 *     ),
 * )
 *
 * @OA\Schema(
 *     schema="ResSuccessNewPosts",
 *     @OA\Property(
 *         property="msg",
 *         type="string",
 *         default="success",
 *     ),
 *     @OA\Property(
 *         property="pid",
 *         type="int",
 *         default=1,
 *     ),
 * )
 *
 * @OA\Schema(
 *     schema="ResPostsExists",
 *     @OA\Property(
 *         property="msg",
 *         type="string",
 *         default="文章不存在",
 *     ),
 * )
 *
 * @OA\Schema(
 *     schema="ResNewMessageFail",
 *     @OA\Property(
 *         property="msg",
 *         type="string",
 *         default="建立文章失敗",
 *     ),
 * )
 *
 */
