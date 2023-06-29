<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTemplateGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTemplateGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  转码模板组ID，最多10个
    * groupName  转码模板组名，最多10个
    * page  分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    * size  每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string[]',
            'groupName' => 'string[]',
            'page' => 'int',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  转码模板组ID，最多10个
    * groupName  转码模板组名，最多10个
    * page  分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    * size  每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupName' => null,
        'page' => 'int32',
        'size' => 'int32'
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
    * groupId  转码模板组ID，最多10个
    * groupName  转码模板组名，最多10个
    * page  分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    * size  每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'page' => 'page',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  转码模板组ID，最多10个
    * groupName  转码模板组名，最多10个
    * page  分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    * size  每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'page' => 'setPage',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  转码模板组ID，最多10个
    * groupName  转码模板组名，最多10个
    * page  分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    * size  每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'page' => 'getPage',
            'size' => 'getSize'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : 0;
        $this->container['size'] = isset($data['size']) ? $data['size'] : 10;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['page']) && ($this->container['page'] > 50000)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 0)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 1000)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
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
    * Gets groupId
    *  转码模板组ID，最多10个
    *
    * @return string[]|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string[]|null $groupId 转码模板组ID，最多10个
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  转码模板组名，最多10个
    *
    * @return string[]|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string[]|null $groupName 转码模板组名，最多10个
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets page
    *  分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 分页编号。查询指定“group_id”时，该参数无效。  默认值：0。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 每页记录数。取值范围：[1,100]，指定group_id时该参数无效。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

