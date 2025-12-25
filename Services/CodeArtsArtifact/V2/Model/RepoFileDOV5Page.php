<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoFileDOV5Page implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoFileDOV5Page';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalRecords  **参数解释**: 总记录数。 **取值范围**: 不涉及。
    * totalPages  **参数解释**: 总页数。 **取值范围**: 不涉及。
    * data  **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalRecords' => 'int',
            'totalPages' => 'int',
            'data' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\RepoFileDOV5[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalRecords  **参数解释**: 总记录数。 **取值范围**: 不涉及。
    * totalPages  **参数解释**: 总页数。 **取值范围**: 不涉及。
    * data  **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalRecords' => 'int32',
        'totalPages' => 'int32',
        'data' => null
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
    * totalRecords  **参数解释**: 总记录数。 **取值范围**: 不涉及。
    * totalPages  **参数解释**: 总页数。 **取值范围**: 不涉及。
    * data  **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalRecords' => 'total_records',
            'totalPages' => 'total_pages',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalRecords  **参数解释**: 总记录数。 **取值范围**: 不涉及。
    * totalPages  **参数解释**: 总页数。 **取值范围**: 不涉及。
    * data  **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalRecords' => 'setTotalRecords',
            'totalPages' => 'setTotalPages',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalRecords  **参数解释**: 总记录数。 **取值范围**: 不涉及。
    * totalPages  **参数解释**: 总页数。 **取值范围**: 不涉及。
    * data  **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalRecords' => 'getTotalRecords',
            'totalPages' => 'getTotalPages',
            'data' => 'getData'
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
        $this->container['totalRecords'] = isset($data['totalRecords']) ? $data['totalRecords'] : null;
        $this->container['totalPages'] = isset($data['totalPages']) ? $data['totalPages'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    * Gets totalRecords
    *  **参数解释**: 总记录数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
    * Sets totalRecords
    *
    * @param int|null $totalRecords **参数解释**: 总记录数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalRecords($totalRecords)
    {
        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }

    /**
    * Gets totalPages
    *  **参数解释**: 总页数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalPages()
    {
        return $this->container['totalPages'];
    }

    /**
    * Sets totalPages
    *
    * @param int|null $totalPages **参数解释**: 总页数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalPages($totalPages)
    {
        $this->container['totalPages'] = $totalPages;
        return $this;
    }

    /**
    * Gets data
    *  **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\RepoFileDOV5[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\RepoFileDOV5[]|null $data **参数解释**: 文件列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

