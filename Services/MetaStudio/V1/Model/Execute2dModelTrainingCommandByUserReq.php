<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Execute2dModelTrainingCommandByUserReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Execute2dModelTrainingCommandByUserReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * commentData  commentData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'command' => 'string',
            'commandMessage' => 'string',
            'commentData' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CommentData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * command  命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * commentData  commentData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'command' => null,
        'commandMessage' => null,
        'commentData' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * command  命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * commentData  commentData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'command' => 'command',
            'commandMessage' => 'command_message',
            'commentData' => 'comment_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * command  命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * commentData  commentData
    *
    * @var string[]
    */
    protected static $setters = [
            'command' => 'setCommand',
            'commandMessage' => 'setCommandMessage',
            'commentData' => 'setCommentData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * command  命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * commentData  commentData
    *
    * @var string[]
    */
    protected static $getters = [
            'command' => 'getCommand',
            'commandMessage' => 'getCommandMessage',
            'commentData' => 'getCommentData'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const COMMAND_SUBMITVERIFYING = 'SUBMITVERIFYING';
    const COMMAND_CONFIRM_ACCEPT = 'CONFIRM_ACCEPT';
    const COMMAND_CONFIRM_REJECT = 'CONFIRM_REJECT';
    const COMMAND_CONFIRM_ANSWER = 'CONFIRM_ANSWER';
    const COMMAND_CONFIRM_PENDING = 'CONFIRM_PENDING';
    const COMMAND_CONFIRM_ACTIVE = 'CONFIRM_ACTIVE';
    const COMMAND_GET_MULTIPART_UPLOADED = 'GET_MULTIPART_UPLOADED';
    const COMMAND_CONFIRM_REPAIR = 'CONFIRM_REPAIR';
    const COMMAND_CONFIRM_MULTIPART_UPLOADED = 'CONFIRM_MULTIPART_UPLOADED';
    const COMMAND_GET_ACTION_VIDEO_MULTIPART_UPLOADED = 'GET_ACTION_VIDEO_MULTIPART_UPLOADED';
    const COMMAND_CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED = 'CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED';
    const COMMAND_MESSAGE_UPDATE_VIDEO = 'UPDATE_VIDEO';
    const COMMAND_MESSAGE_UPLOAD_VIDEO = 'UPLOAD_VIDEO';
    const COMMAND_MESSAGE_CONFIRM_ACTION_VIDEO = 'CONFIRM_ACTION_VIDEO';
    const COMMAND_MESSAGE_GET_ACTION_VIDEO_MULTIPART = 'GET_ACTION_VIDEO_MULTIPART';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandAllowableValues()
    {
        return [
            self::COMMAND_SUBMITVERIFYING,
            self::COMMAND_CONFIRM_ACCEPT,
            self::COMMAND_CONFIRM_REJECT,
            self::COMMAND_CONFIRM_ANSWER,
            self::COMMAND_CONFIRM_PENDING,
            self::COMMAND_CONFIRM_ACTIVE,
            self::COMMAND_GET_MULTIPART_UPLOADED,
            self::COMMAND_CONFIRM_REPAIR,
            self::COMMAND_CONFIRM_MULTIPART_UPLOADED,
            self::COMMAND_GET_ACTION_VIDEO_MULTIPART_UPLOADED,
            self::COMMAND_CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandMessageAllowableValues()
    {
        return [
            self::COMMAND_MESSAGE_UPDATE_VIDEO,
            self::COMMAND_MESSAGE_UPLOAD_VIDEO,
            self::COMMAND_MESSAGE_CONFIRM_ACTION_VIDEO,
            self::COMMAND_MESSAGE_GET_ACTION_VIDEO_MULTIPART,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['commandMessage'] = isset($data['commandMessage']) ? $data['commandMessage'] : null;
        $this->container['commentData'] = isset($data['commentData']) ? $data['commentData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
            $allowedValues = $this->getCommandAllowableValues();
                if (!is_null($this->container['command']) && !in_array($this->container['command'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'command', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCommandMessageAllowableValues();
                if (!is_null($this->container['commandMessage']) && !in_array($this->container['commandMessage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'commandMessage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets command
    *  命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    *
    * @return string
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string $command 命令类型。 * SUBMITVERIFYING: 提交审核 * CONFIRM_ACCEPT：用户确认训练效果 * CONFIRM_REJECT：用户驳回训练效果 * CONFIRM_ANSWER：用户答复 * CONFIRM_PENDING：用户挂起任务 * CONFIRM_ACTIVE：用户激活任务 * GET_MULTIPART_UPLOADED：获取训练视频分片上传地址 * CONFIRM_REPAIR:用户发起优化模型请求 * GET_MULTIPART_UPLOADED：获取训练视频已上传分片信息 * CONFIRM_MULTIPART_UPLOADED：确认训练视频所有分片文件已上传 * GET_ACTION_VIDEO_MULTIPART_UPLOADED：获取动作编排视频分片上传地址 * CONFIRM_ACTION_VIDEO_MULTIPART_UPLOADED：确认动作编排视频所有分片文件已上传 > * CONFIRM_ACCEPT/CONFIRM_REJECT/CONFIRM_ANSWER/CONFIRM_PENDING/CONFIRM_ACTIVE命令仅NA白名单用户可用。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets commandMessage
    *  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    *
    * @return string|null
    */
    public function getCommandMessage()
    {
        return $this->container['commandMessage'];
    }

    /**
    * Sets commandMessage
    *
    * @param string|null $commandMessage 命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO: 上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    *
    * @return $this
    */
    public function setCommandMessage($commandMessage)
    {
        $this->container['commandMessage'] = $commandMessage;
        return $this;
    }

    /**
    * Gets commentData
    *  commentData
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CommentData|null
    */
    public function getCommentData()
    {
        return $this->container['commentData'];
    }

    /**
    * Sets commentData
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CommentData|null $commentData commentData
    *
    * @return $this
    */
    public function setCommentData($commentData)
    {
        $this->container['commentData'] = $commentData;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

