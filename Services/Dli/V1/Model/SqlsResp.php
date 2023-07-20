<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlId  SQL模板ID。
    * sqlName  SQL模板名称。
    * sql  SQL模板文本。
    * description  SQL模板描述信息。
    * group  分组名称。
    * owner  SQL模板的创建者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlId' => 'string',
            'sqlName' => 'string',
            'sql' => 'string',
            'description' => 'string',
            'group' => 'string',
            'owner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlId  SQL模板ID。
    * sqlName  SQL模板名称。
    * sql  SQL模板文本。
    * description  SQL模板描述信息。
    * group  分组名称。
    * owner  SQL模板的创建者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlId' => null,
        'sqlName' => null,
        'sql' => null,
        'description' => null,
        'group' => null,
        'owner' => null
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
    * sqlId  SQL模板ID。
    * sqlName  SQL模板名称。
    * sql  SQL模板文本。
    * description  SQL模板描述信息。
    * group  分组名称。
    * owner  SQL模板的创建者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlId' => 'sql_id',
            'sqlName' => 'sql_name',
            'sql' => 'sql',
            'description' => 'description',
            'group' => 'group',
            'owner' => 'owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlId  SQL模板ID。
    * sqlName  SQL模板名称。
    * sql  SQL模板文本。
    * description  SQL模板描述信息。
    * group  分组名称。
    * owner  SQL模板的创建者。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlId' => 'setSqlId',
            'sqlName' => 'setSqlName',
            'sql' => 'setSql',
            'description' => 'setDescription',
            'group' => 'setGroup',
            'owner' => 'setOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlId  SQL模板ID。
    * sqlName  SQL模板名称。
    * sql  SQL模板文本。
    * description  SQL模板描述信息。
    * group  分组名称。
    * owner  SQL模板的创建者。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlId' => 'getSqlId',
            'sqlName' => 'getSqlName',
            'sql' => 'getSql',
            'description' => 'getDescription',
            'group' => 'getGroup',
            'owner' => 'getOwner'
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
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlName'] = isset($data['sqlName']) ? $data['sqlName'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
    * Gets sqlId
    *  SQL模板ID。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId SQL模板ID。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets sqlName
    *  SQL模板名称。
    *
    * @return string|null
    */
    public function getSqlName()
    {
        return $this->container['sqlName'];
    }

    /**
    * Sets sqlName
    *
    * @param string|null $sqlName SQL模板名称。
    *
    * @return $this
    */
    public function setSqlName($sqlName)
    {
        $this->container['sqlName'] = $sqlName;
        return $this;
    }

    /**
    * Gets sql
    *  SQL模板文本。
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql SQL模板文本。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets description
    *  SQL模板描述信息。
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
    * @param string|null $description SQL模板描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets group
    *  分组名称。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 分组名称。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets owner
    *  SQL模板的创建者。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner SQL模板的创建者。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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

