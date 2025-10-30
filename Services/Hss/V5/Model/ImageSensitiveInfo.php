<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageSensitiveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageSensitiveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sensitiveInfoId  **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    * name  **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    * description  **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    * position  **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    * filePath  **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    * content  **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * handleStatus  **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    * operateAccept  **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sensitiveInfoId' => 'string',
            'severity' => 'string',
            'name' => 'string',
            'description' => 'string',
            'position' => 'string',
            'filePath' => 'string',
            'content' => 'string',
            'latestScanTime' => 'int',
            'handleStatus' => 'string',
            'operateAccept' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sensitiveInfoId  **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    * name  **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    * description  **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    * position  **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    * filePath  **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    * content  **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * handleStatus  **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    * operateAccept  **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sensitiveInfoId' => null,
        'severity' => null,
        'name' => null,
        'description' => null,
        'position' => null,
        'filePath' => null,
        'content' => null,
        'latestScanTime' => 'int64',
        'handleStatus' => null,
        'operateAccept' => null
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
    * sensitiveInfoId  **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    * name  **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    * description  **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    * position  **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    * filePath  **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    * content  **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * handleStatus  **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    * operateAccept  **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sensitiveInfoId' => 'sensitive_info_id',
            'severity' => 'severity',
            'name' => 'name',
            'description' => 'description',
            'position' => 'position',
            'filePath' => 'file_path',
            'content' => 'content',
            'latestScanTime' => 'latest_scan_time',
            'handleStatus' => 'handle_status',
            'operateAccept' => 'operate_accept'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sensitiveInfoId  **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    * name  **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    * description  **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    * position  **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    * filePath  **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    * content  **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * handleStatus  **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    * operateAccept  **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @var string[]
    */
    protected static $setters = [
            'sensitiveInfoId' => 'setSensitiveInfoId',
            'severity' => 'setSeverity',
            'name' => 'setName',
            'description' => 'setDescription',
            'position' => 'setPosition',
            'filePath' => 'setFilePath',
            'content' => 'setContent',
            'latestScanTime' => 'setLatestScanTime',
            'handleStatus' => 'setHandleStatus',
            'operateAccept' => 'setOperateAccept'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sensitiveInfoId  **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    * severity  **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    * name  **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    * description  **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    * position  **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    * filePath  **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    * content  **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * handleStatus  **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    * operateAccept  **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @var string[]
    */
    protected static $getters = [
            'sensitiveInfoId' => 'getSensitiveInfoId',
            'severity' => 'getSeverity',
            'name' => 'getName',
            'description' => 'getDescription',
            'position' => 'getPosition',
            'filePath' => 'getFilePath',
            'content' => 'getContent',
            'latestScanTime' => 'getLatestScanTime',
            'handleStatus' => 'getHandleStatus',
            'operateAccept' => 'getOperateAccept'
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
        $this->container['sensitiveInfoId'] = isset($data['sensitiveInfoId']) ? $data['sensitiveInfoId'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['operateAccept'] = isset($data['operateAccept']) ? $data['operateAccept'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sensitiveInfoId']) && (mb_strlen($this->container['sensitiveInfoId']) > 128)) {
                $invalidProperties[] = "invalid value for 'sensitiveInfoId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sensitiveInfoId']) && (mb_strlen($this->container['sensitiveInfoId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sensitiveInfoId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 128)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) > 128)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) < 0)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 128)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 128)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operateAccept']) && (mb_strlen($this->container['operateAccept']) > 256)) {
                $invalidProperties[] = "invalid value for 'operateAccept', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['operateAccept']) && (mb_strlen($this->container['operateAccept']) < 0)) {
                $invalidProperties[] = "invalid value for 'operateAccept', the character length must be bigger than or equal to 0.";
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
    * Gets sensitiveInfoId
    *  **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getSensitiveInfoId()
    {
        return $this->container['sensitiveInfoId'];
    }

    /**
    * Sets sensitiveInfoId
    *
    * @param string|null $sensitiveInfoId **参数解释**: 敏感事件编号 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setSensitiveInfoId($sensitiveInfoId)
    {
        $this->container['sensitiveInfoId'] = $sensitiveInfoId;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**: 威胁等级 **取值范围**: - critical：致命。 - high：高危。 - medium：中危。 - low : 低危。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**: 规则名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**: 规则描述 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets position
    *  **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position **参数解释**: 漏洞所在镜像层 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**: 文件路径 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释**: 敏感信息内容 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 是否已处理 **取值范围**: - unhandled：未处理。 - handled：已处理。
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets operateAccept
    *  **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @return string|null
    */
    public function getOperateAccept()
    {
        return $this->container['operateAccept'];
    }

    /**
    * Sets operateAccept
    *
    * @param string|null $operateAccept **参数解释**: 操作 **取值范围**: - ignore ：忽略。 - do_not_ignore ：取消忽略。
    *
    * @return $this
    */
    public function setOperateAccept($operateAccept)
    {
        $this->container['operateAccept'] = $operateAccept;
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

