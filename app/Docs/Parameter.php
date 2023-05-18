<?php
/**
 * @OA\Parameter(
 *     parameter="type",
 *     name="type",
 *     in="query",
 *     description="發票種類",
 *     required=false,
 *     @OA\Schema(
 *         type="array",
 *         @OA\Items(
 *             type="string",
 *             enum={"電子發票", "雲端載具", "傳統發票"},
 *             default="",
 *         ),
 *     ),
 * )
 *
 * @OA\Parameter(
 *     parameter="status",
 *     name="status",
 *     in="query",
 *     description="發票狀態",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *         enum={"登錄成功", "待審核", "登錄失敗"},
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="startDate",
 *     name="startDate",
 *     in="query",
 *     description="起始日期",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="endDate",
 *     name="endDate",
 *     in="query",
 *     description="結束日期",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *     )
 * ),
 *
 * @OA\Parameter(
 *     parameter="keyword",
 *     name="keyword",
 *     in="query",
 *     description="關鍵字",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="lotteryStatus",
 *     name="lotteryStatus",
 *     in="query",
 *     description="中獎狀態",
 *     required=false,
 *     @OA\Schema(
 *         type="string",
 *         enum={"已中獎", "未中獎"},
 *     )
 * )
 *
 * @OA\Parameter(
 *     parameter="rewardId",
 *     name="rewardId",
 *     in="query",
 *     description="獎品Id",
 *     required=false,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64"
 *     )
 * )
 *
 * @OA\Parameter(
 *     name="userId",
 *     in="path",
 *     description="參與者id",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64"
 *     ),
 * )
 *
 * @OA\Parameter(
 *     name="invoiceId",
 *     in="path",
 *     description="發票id",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64"
 *     ),
 * ),
 *
 * @OA\Parameter(
 *     name="statusId",
 *     in="path",
 *     description="發票狀態id",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64"
 *     ),
 * )
 *
 * @OA\Parameter(
 *     name="lotteryType",
 *     in="path",
 *     description="抽獎類型",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64",
 *         description="1:發票登錄抽獎 2:序號抽獎",
 *     ),
 * )
 *
 * @OA\Parameter(
 *     name="lineToken",
 *     in="path",
 *     description="參與者line token",
 *     required=true,
 *     @OA\Schema(
 *         type="string"
 *     ),
 * )
 *
 * @OA\Parameter(
 *     name="limit",
 *     in="query",
 *     description="每頁顯示資料",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64"
 *     ),
 * )
 *
 * @OA\Parameter(
 *     name="page",
 *     in="query",
 *     description="頁碼",
 *     required=true,
 *     @OA\Schema(
 *         type="integer",
 *         format="int64"
 *     ),
 * )
 *
 */
