<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstructionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstructionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * instructionLibraryId  指令集ID。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'instruction' => 'string',
            'instructionLibraryId' => 'string',
            'slotList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionSlotInfo[]',
            'replyWordsList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InstructionReplyWordsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * instructionLibraryId  指令集ID。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'instruction' => null,
        'instructionLibraryId' => null,
        'slotList' => null,
        'replyWordsList' => null
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
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * instructionLibraryId  指令集ID。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'instruction' => 'instruction',
            'instructionLibraryId' => 'instruction_library_id',
            'slotList' => 'slot_list',
            'replyWordsList' => 'reply_words_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * instructionLibraryId  指令集ID。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'instruction' => 'setInstruction',
            'instructionLibraryId' => 'setInstructionLibraryId',
            'slotList' => 'setSlotList',
            'replyWordsList' => 'setReplyWordsList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  指令名称。
    * description  指令描述。
    * instruction  操作指令。
    * instructionLibraryId  指令集ID。
    * slotList  槽位列表
    * replyWordsList  指令回复话术列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'instruction' => 'getInstruction',
            'instructionLibraryId' => 'getInstructionLibraryId',
            'slotList' => 'getSlotList',
            'replyWordsList' => 'getReplyWordsList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instruction'] = isset($data['instruction']) ? $data['instruction'] : null;
        $this->container['instructionLibraryId'] = isset($data['instructionLibraryId']) ? $data['instructionLibraryId'] : null;
        $this->container['slotList'] = isset($data['slotList']) ? $data['slotList'] : null;
        $this->container['replyWordsList'] = isset($data['replyWordsList']) ? $data['replyWordsList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instruction'] === null) {
            $invalidProperties[] = "'instruction' can't be null";
        }
            if ((mb_strlen($this->container['instruction']) > 1024)) {
                $invalidProperties[] = "invalid value for 'instruction', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['instruction']) < 1)) {
                $invalidProperties[] = "invalid value for 'instruction', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instructionLibraryId'] === null) {
            $invalidProperties[] = "'instructionLibraryId' can't be null";
        }
            if ((mb_strlen($this->container['instructionLibraryId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instructionLibraryId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instructionLibraryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instructionLibraryId', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  指令名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 指令名称。
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
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 指令描述。
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
    * @return string
    */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
    * Sets instruction
    *
    * @param string $instruction 操作指令。
    *
    * @return $this
    */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;
        return $this;
    }

    /**
    * Gets instructionLibraryId
    *  指令集ID。
    *
    * @return string
    */
    public function getInstructionLibraryId()
    {
        return $this->container['instructionLibraryId'];
    }

    /**
    * Sets instructionLibraryId
    *
    * @param string $instructionLibraryId 指令集ID。
    *
    * @return $this
    */
    public function setInstructionLibraryId($instructionLibraryId)
    {
        $this->container['instructionLibraryId'] = $instructionLibraryId;
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

