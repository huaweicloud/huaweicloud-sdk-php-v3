<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivilegeEscalationDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivilegeEscalationDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actions  指定的待分析操作集合。
    * resource  资源的唯一资源标识符。
    * principal  principal
    * activeAction  能够通过提权访问路径触发的操作代表。
    * path  path
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actions' => 'string[]',
            'resource' => 'string',
            'principal' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal',
            'activeAction' => 'string',
            'path' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PrivilegeEscalationStep[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actions  指定的待分析操作集合。
    * resource  资源的唯一资源标识符。
    * principal  principal
    * activeAction  能够通过提权访问路径触发的操作代表。
    * path  path
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actions' => null,
        'resource' => null,
        'principal' => null,
        'activeAction' => null,
        'path' => null
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
    * actions  指定的待分析操作集合。
    * resource  资源的唯一资源标识符。
    * principal  principal
    * activeAction  能够通过提权访问路径触发的操作代表。
    * path  path
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actions' => 'actions',
            'resource' => 'resource',
            'principal' => 'principal',
            'activeAction' => 'active_action',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actions  指定的待分析操作集合。
    * resource  资源的唯一资源标识符。
    * principal  principal
    * activeAction  能够通过提权访问路径触发的操作代表。
    * path  path
    *
    * @var string[]
    */
    protected static $setters = [
            'actions' => 'setActions',
            'resource' => 'setResource',
            'principal' => 'setPrincipal',
            'activeAction' => 'setActiveAction',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actions  指定的待分析操作集合。
    * resource  资源的唯一资源标识符。
    * principal  principal
    * activeAction  能够通过提权访问路径触发的操作代表。
    * path  path
    *
    * @var string[]
    */
    protected static $getters = [
            'actions' => 'getActions',
            'resource' => 'getResource',
            'principal' => 'getPrincipal',
            'activeAction' => 'getActiveAction',
            'path' => 'getPath'
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
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['activeAction'] = isset($data['activeAction']) ? $data['activeAction'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
        }
            if ((mb_strlen($this->container['resource']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resource', the character length must be smaller than or equal to 1500.";
            }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
        }
        if ($this->container['activeAction'] === null) {
            $invalidProperties[] = "'activeAction' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
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
    * Gets actions
    *  指定的待分析操作集合。
    *
    * @return string[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[] $actions 指定的待分析操作集合。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets resource
    *  资源的唯一资源标识符。
    *
    * @return string
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string $resource 资源的唯一资源标识符。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets principal
    *  principal
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal
    */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
    * Sets principal
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal $principal principal
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets activeAction
    *  能够通过提权访问路径触发的操作代表。
    *
    * @return string
    */
    public function getActiveAction()
    {
        return $this->container['activeAction'];
    }

    /**
    * Sets activeAction
    *
    * @param string $activeAction 能够通过提权访问路径触发的操作代表。
    *
    * @return $this
    */
    public function setActiveAction($activeAction)
    {
        $this->container['activeAction'] = $activeAction;
        return $this;
    }

    /**
    * Gets path
    *  path
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PrivilegeEscalationStep[]
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PrivilegeEscalationStep[] $path path
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

