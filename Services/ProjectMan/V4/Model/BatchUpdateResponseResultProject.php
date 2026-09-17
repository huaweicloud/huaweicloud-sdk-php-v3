<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateResponseResultProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateResponse_result_project';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    * total  **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    * close  **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    * role  **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    * type  **参数解释：** 工作项类型。 **取值范围：** scrum。
    * archive  **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    * memCount  **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'identifier' => 'string',
            'total' => 'int',
            'close' => 'int',
            'role' => 'int',
            'type' => 'string',
            'archive' => 'bool',
            'memCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    * total  **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    * close  **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    * role  **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    * type  **参数解释：** 工作项类型。 **取值范围：** scrum。
    * archive  **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    * memCount  **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'identifier' => null,
        'total' => 'int32',
        'close' => 'int32',
        'role' => 'int32',
        'type' => null,
        'archive' => null,
        'memCount' => 'int32'
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
    * id  **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    * total  **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    * close  **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    * role  **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    * type  **参数解释：** 工作项类型。 **取值范围：** scrum。
    * archive  **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    * memCount  **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'identifier' => 'identifier',
            'total' => 'total',
            'close' => 'close',
            'role' => 'role',
            'type' => 'type',
            'archive' => 'archive',
            'memCount' => 'mem_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    * total  **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    * close  **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    * role  **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    * type  **参数解释：** 工作项类型。 **取值范围：** scrum。
    * archive  **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    * memCount  **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'identifier' => 'setIdentifier',
            'total' => 'setTotal',
            'close' => 'setClose',
            'role' => 'setRole',
            'type' => 'setType',
            'archive' => 'setArchive',
            'memCount' => 'setMemCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    * total  **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    * close  **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    * role  **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    * type  **参数解释：** 工作项类型。 **取值范围：** scrum。
    * archive  **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    * memCount  **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'identifier' => 'getIdentifier',
            'total' => 'getTotal',
            'close' => 'getClose',
            'role' => 'getRole',
            'type' => 'getType',
            'archive' => 'getArchive',
            'memCount' => 'getMemCount'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['close'] = isset($data['close']) ? $data['close'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : null;
        $this->container['memCount'] = isset($data['memCount']) ? $data['memCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets id
    *  **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 项目数字id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets identifier
    *  **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier **参数解释：** 项目uuid。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释：** 批量编辑工作项的总数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets close
    *  **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    *
    * @return int|null
    */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
    * Sets close
    *
    * @param int|null $close **参数解释：** 项目是否关闭。 **取值范围：** 0（打开） 1（关闭）
    *
    * @return $this
    */
    public function setClose($close)
    {
        $this->container['close'] = $close;
        return $this;
    }

    /**
    * Gets role
    *  **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param int|null $role **参数解释：** 批量编辑数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 工作项类型。 **取值范围：** scrum。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 工作项类型。 **取值范围：** scrum。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets archive
    *  **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    *
    * @return bool|null
    */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
    * Sets archive
    *
    * @param bool|null $archive **参数解释：** 工作项是否归档。 **取值范围：** true(归档) false(未归档)
    *
    * @return $this
    */
    public function setArchive($archive)
    {
        $this->container['archive'] = $archive;
        return $this;
    }

    /**
    * Gets memCount
    *  **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getMemCount()
    {
        return $this->container['memCount'];
    }

    /**
    * Sets memCount
    *
    * @param int|null $memCount **参数解释：** 项目数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMemCount($memCount)
    {
        $this->container['memCount'] = $memCount;
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

