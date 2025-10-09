<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateNodesSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateNodesSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * os  操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    * extendParam  extendParam
    * login  login
    * runtime  runtime
    * serverConfig  serverConfig
    * nodes  待操作节点列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'os' => 'string',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\MigrateNodeExtendParam',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\Login',
            'runtime' => '\HuaweiCloud\SDK\Cce\V3\Model\Runtime',
            'serverConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\MigrateServerConfig',
            'nodes' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * os  操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    * extendParam  extendParam
    * login  login
    * runtime  runtime
    * serverConfig  serverConfig
    * nodes  待操作节点列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'os' => null,
        'extendParam' => null,
        'login' => null,
        'runtime' => null,
        'serverConfig' => null,
        'nodes' => null
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
    * os  操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    * extendParam  extendParam
    * login  login
    * runtime  runtime
    * serverConfig  serverConfig
    * nodes  待操作节点列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'os' => 'os',
            'extendParam' => 'extendParam',
            'login' => 'login',
            'runtime' => 'runtime',
            'serverConfig' => 'serverConfig',
            'nodes' => 'nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * os  操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    * extendParam  extendParam
    * login  login
    * runtime  runtime
    * serverConfig  serverConfig
    * nodes  待操作节点列表
    *
    * @var string[]
    */
    protected static $setters = [
            'os' => 'setOs',
            'extendParam' => 'setExtendParam',
            'login' => 'setLogin',
            'runtime' => 'setRuntime',
            'serverConfig' => 'setServerConfig',
            'nodes' => 'setNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * os  操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    * extendParam  extendParam
    * login  login
    * runtime  runtime
    * serverConfig  serverConfig
    * nodes  待操作节点列表
    *
    * @var string[]
    */
    protected static $getters = [
            'os' => 'getOs',
            'extendParam' => 'getExtendParam',
            'login' => 'getLogin',
            'runtime' => 'getRuntime',
            'serverConfig' => 'getServerConfig',
            'nodes' => 'getNodes'
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['serverConfig'] = isset($data['serverConfig']) ? $data['serverConfig'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
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
    * Gets os
    *  操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    *
    * @return string
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string $os 操作系统类型，须精确到版本号。 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\MigrateNodeExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\MigrateNodeExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Login|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Login|null $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets runtime
    *  runtime
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null $runtime runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets serverConfig
    *  serverConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\MigrateServerConfig|null
    */
    public function getServerConfig()
    {
        return $this->container['serverConfig'];
    }

    /**
    * Sets serverConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\MigrateServerConfig|null $serverConfig serverConfig
    *
    * @return $this
    */
    public function setServerConfig($serverConfig)
    {
        $this->container['serverConfig'] = $serverConfig;
        return $this;
    }

    /**
    * Gets nodes
    *  待操作节点列表
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeItem[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeItem[] $nodes 待操作节点列表
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
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

