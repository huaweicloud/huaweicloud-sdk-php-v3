<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstructionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstructionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instructionId  指令ID。
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instructionId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'instruction' => 'string',
            'slotList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionSlotInfo[]',
            'replyWordsList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionReplyWordsInfo[]',
            'createTime' => 'string',
            'updateTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instructionId  指令ID。
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instructionId' => null,
        'name' => null,
        'description' => null,
        'instruction' => null,
        'slotList' => null,
        'replyWordsList' => null,
        'createTime' => null,
        'updateTime' => null,
        'xRequestId' => null
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
    * instructionId  指令ID。
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instructionId' => 'instruction_id',
            'name' => 'name',
            'description' => 'description',
            'instruction' => 'instruction',
            'slotList' => 'slot_list',
            'replyWordsList' => 'reply_words_list',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instructionId  指令ID。
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'instructionId' => 'setInstructionId',
            'name' => 'setName',
            'description' => 'setDescription',
            'instruction' => 'setInstruction',
            'slotList' => 'setSlotList',
            'replyWordsList' => 'setReplyWordsList',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instructionId  指令ID。
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'instructionId' => 'getInstructionId',
            'name' => 'getName',
            'description' => 'getDescription',
            'instruction' => 'getInstruction',
            'slotList' => 'getSlotList',
            'replyWordsList' => 'getReplyWordsList',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'xRequestId' => 'getXRequestId'
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
        $this->container['instructionId'] = isset($data['instructionId']) ? $data['instructionId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instruction'] = isset($data['instruction']) ? $data['instruction'] : null;
        $this->container['slotList'] = isset($data['slotList']) ? $data['slotList'] : null;
        $this->container['replyWordsList'] = isset($data['replyWordsList']) ? $data['replyWordsList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instructionId']) && (mb_strlen($this->container['instructionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instructionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instructionId']) && (mb_strlen($this->container['instructionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instructionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instruction']) && (mb_strlen($this->container['instruction']) > 1024)) {
                $invalidProperties[] = "invalid value for 'instruction', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['instruction']) && (mb_strlen($this->container['instruction']) < 1)) {
                $invalidProperties[] = "invalid value for 'instruction', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets instructionId
    *  指令ID。
    *
    * @return string|null
    */
    public function getInstructionId()
    {
        return $this->container['instructionId'];
    }

    /**
    * Sets instructionId
    *
    * @param string|null $instructionId 指令ID。
    *
    * @return $this
    */
    public function setInstructionId($instructionId)
    {
        $this->container['instructionId'] = $instructionId;
        return $this;
    }

    /**
    * Gets name
    *  指令名称。
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
    * @param string|null $name 指令名称。
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
    *  指令描述。
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
    * @param string|null $description 指令描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instruction
    *  操作指令。
    *
    * @return string|null
    */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
    * Sets instruction
    *
    * @param string|null $instruction 操作指令。
    *
    * @return $this
    */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;
        return $this;
    }

    /**
    * Gets slotList
    *  槽位列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionSlotInfo[]|null
    */
    public function getSlotList()
    {
        return $this->container['slotList'];
    }

    /**
    * Sets slotList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionSlotInfo[]|null $slotList 槽位列表
    *
    * @return $this
    */
    public function setSlotList($slotList)
    {
        $this->container['slotList'] = $slotList;
        return $this;
    }

    /**
    * Gets replyWordsList
    *  指令回复话术列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionReplyWordsInfo[]|null
    */
    public function getReplyWordsList()
    {
        return $this->container['replyWordsList'];
    }

    /**
    * Sets replyWordsList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionReplyWordsInfo[]|null $replyWordsList 指令回复话术列表
    *
    * @return $this
    */
    public function setReplyWordsList($replyWordsList)
    {
        $this->container['replyWordsList'] = $replyWordsList;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

