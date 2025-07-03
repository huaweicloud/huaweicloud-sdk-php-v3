<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TreeNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TreeNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  拓扑树节点id。
    * parent  拓扑树节点的父节点。
    * realId  拓扑树节点的实际id。
    * name  拓扑树节点名称。
    * displayName  拓扑树节点展示名称。
    * appName  组件名称。
    * appId  组件id。
    * isAdmin  是否是管理节点。
    * isRoot  是否是根节点。
    * businessId  应用id。
    * nodeType  节点类型。
    * region  区域。
    * isDefault  是否是默认的节点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parent' => 'string',
            'realId' => 'int',
            'name' => 'string',
            'displayName' => 'string',
            'appName' => 'string',
            'appId' => 'int',
            'isAdmin' => 'bool',
            'isRoot' => 'bool',
            'businessId' => 'int',
            'nodeType' => 'string',
            'region' => 'string',
            'isDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  拓扑树节点id。
    * parent  拓扑树节点的父节点。
    * realId  拓扑树节点的实际id。
    * name  拓扑树节点名称。
    * displayName  拓扑树节点展示名称。
    * appName  组件名称。
    * appId  组件id。
    * isAdmin  是否是管理节点。
    * isRoot  是否是根节点。
    * businessId  应用id。
    * nodeType  节点类型。
    * region  区域。
    * isDefault  是否是默认的节点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parent' => null,
        'realId' => 'int64',
        'name' => null,
        'displayName' => null,
        'appName' => null,
        'appId' => 'int64',
        'isAdmin' => null,
        'isRoot' => null,
        'businessId' => 'int64',
        'nodeType' => null,
        'region' => null,
        'isDefault' => null
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
    * id  拓扑树节点id。
    * parent  拓扑树节点的父节点。
    * realId  拓扑树节点的实际id。
    * name  拓扑树节点名称。
    * displayName  拓扑树节点展示名称。
    * appName  组件名称。
    * appId  组件id。
    * isAdmin  是否是管理节点。
    * isRoot  是否是根节点。
    * businessId  应用id。
    * nodeType  节点类型。
    * region  区域。
    * isDefault  是否是默认的节点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parent' => 'parent',
            'realId' => 'real_id',
            'name' => 'name',
            'displayName' => 'display_name',
            'appName' => 'app_name',
            'appId' => 'app_id',
            'isAdmin' => 'is_admin',
            'isRoot' => 'is_root',
            'businessId' => 'business_id',
            'nodeType' => 'node_type',
            'region' => 'region',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  拓扑树节点id。
    * parent  拓扑树节点的父节点。
    * realId  拓扑树节点的实际id。
    * name  拓扑树节点名称。
    * displayName  拓扑树节点展示名称。
    * appName  组件名称。
    * appId  组件id。
    * isAdmin  是否是管理节点。
    * isRoot  是否是根节点。
    * businessId  应用id。
    * nodeType  节点类型。
    * region  区域。
    * isDefault  是否是默认的节点。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parent' => 'setParent',
            'realId' => 'setRealId',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'appName' => 'setAppName',
            'appId' => 'setAppId',
            'isAdmin' => 'setIsAdmin',
            'isRoot' => 'setIsRoot',
            'businessId' => 'setBusinessId',
            'nodeType' => 'setNodeType',
            'region' => 'setRegion',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  拓扑树节点id。
    * parent  拓扑树节点的父节点。
    * realId  拓扑树节点的实际id。
    * name  拓扑树节点名称。
    * displayName  拓扑树节点展示名称。
    * appName  组件名称。
    * appId  组件id。
    * isAdmin  是否是管理节点。
    * isRoot  是否是根节点。
    * businessId  应用id。
    * nodeType  节点类型。
    * region  区域。
    * isDefault  是否是默认的节点。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parent' => 'getParent',
            'realId' => 'getRealId',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'appName' => 'getAppName',
            'appId' => 'getAppId',
            'isAdmin' => 'getIsAdmin',
            'isRoot' => 'getIsRoot',
            'businessId' => 'getBusinessId',
            'nodeType' => 'getNodeType',
            'region' => 'getRegion',
            'isDefault' => 'getIsDefault'
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
    const NODE_TYPE_BUSINESS = 'BUSINESS';
    const NODE_TYPE_SUB_BUSINESS = 'SUB_BUSINESS';
    const NODE_TYPE_APPLICATION = 'APPLICATION';
    const NODE_TYPE_ENVIRONMENT = 'ENVIRONMENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_BUSINESS,
            self::NODE_TYPE_SUB_BUSINESS,
            self::NODE_TYPE_APPLICATION,
            self::NODE_TYPE_ENVIRONMENT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['realId'] = isset($data['realId']) ? $data['realId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['isAdmin'] = isset($data['isAdmin']) ? $data['isAdmin'] : null;
        $this->container['isRoot'] = isset($data['isRoot']) ? $data['isRoot'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
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
    * Gets id
    *  拓扑树节点id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 拓扑树节点id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parent
    *  拓扑树节点的父节点。
    *
    * @return string|null
    */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
    * Sets parent
    *
    * @param string|null $parent 拓扑树节点的父节点。
    *
    * @return $this
    */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;
        return $this;
    }

    /**
    * Gets realId
    *  拓扑树节点的实际id。
    *
    * @return int|null
    */
    public function getRealId()
    {
        return $this->container['realId'];
    }

    /**
    * Sets realId
    *
    * @param int|null $realId 拓扑树节点的实际id。
    *
    * @return $this
    */
    public function setRealId($realId)
    {
        $this->container['realId'] = $realId;
        return $this;
    }

    /**
    * Gets name
    *  拓扑树节点名称。
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
    * @param string|null $name 拓扑树节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  拓扑树节点展示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 拓扑树节点展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appId
    *  组件id。
    *
    * @return int|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param int|null $appId 组件id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets isAdmin
    *  是否是管理节点。
    *
    * @return bool|null
    */
    public function getIsAdmin()
    {
        return $this->container['isAdmin'];
    }

    /**
    * Sets isAdmin
    *
    * @param bool|null $isAdmin 是否是管理节点。
    *
    * @return $this
    */
    public function setIsAdmin($isAdmin)
    {
        $this->container['isAdmin'] = $isAdmin;
        return $this;
    }

    /**
    * Gets isRoot
    *  是否是根节点。
    *
    * @return bool|null
    */
    public function getIsRoot()
    {
        return $this->container['isRoot'];
    }

    /**
    * Sets isRoot
    *
    * @param bool|null $isRoot 是否是根节点。
    *
    * @return $this
    */
    public function setIsRoot($isRoot)
    {
        $this->container['isRoot'] = $isRoot;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets region
    *  区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否是默认的节点。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否是默认的节点。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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

