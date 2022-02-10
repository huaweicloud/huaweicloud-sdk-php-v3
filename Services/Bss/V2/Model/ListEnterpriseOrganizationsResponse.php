<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseOrganizationsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseOrganizationsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rootId  根节点ID，如果请求有parent_id，则该参数无值。
    * rootName  根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rootId' => 'string',
            'rootName' => 'string',
            'childNodes' => '\HuaweiCloud\SDK\Bss\V2\Model\EmChildNodeV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rootId  根节点ID，如果请求有parent_id，则该参数无值。
    * rootName  根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rootId' => null,
        'rootName' => null,
        'childNodes' => null
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
    * rootId  根节点ID，如果请求有parent_id，则该参数无值。
    * rootName  根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rootId' => 'root_id',
            'rootName' => 'root_name',
            'childNodes' => 'child_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rootId  根节点ID，如果请求有parent_id，则该参数无值。
    * rootName  根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'rootId' => 'setRootId',
            'rootName' => 'setRootName',
            'childNodes' => 'setChildNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rootId  根节点ID，如果请求有parent_id，则该参数无值。
    * rootName  根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'rootId' => 'getRootId',
            'rootName' => 'getRootName',
            'childNodes' => 'getChildNodes'
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
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['rootName'] = isset($data['rootName']) ? $data['rootName'] : null;
        $this->container['childNodes'] = isset($data['childNodes']) ? $data['childNodes'] : null;
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
    * Gets rootId
    *  根节点ID，如果请求有parent_id，则该参数无值。
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId 根节点ID，如果请求有parent_id，则该参数无值。
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets rootName
    *  根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    *
    * @return string|null
    */
    public function getRootName()
    {
        return $this->container['rootName'];
    }

    /**
    * Sets rootName
    *
    * @param string|null $rootName 根节点名称，如果请求有parent_id，则该参数无值。  说明： 组织根节点没有设置组织名称时，可能为空。
    *
    * @return $this
    */
    public function setRootName($rootName)
    {
        $this->container['rootName'] = $rootName;
        return $this;
    }

    /**
    * Gets childNodes
    *  子节点列表。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\EmChildNodeV2[]|null
    */
    public function getChildNodes()
    {
        return $this->container['childNodes'];
    }

    /**
    * Sets childNodes
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\EmChildNodeV2[]|null $childNodes 子节点列表。
    *
    * @return $this
    */
    public function setChildNodes($childNodes)
    {
        $this->container['childNodes'] = $childNodes;
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

