<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineName  引擎名称。
    * type  节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    * vcpus  CPU核数。
    * ram  内存大小，单位为兆字节。
    * specCode  资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    * azStatus  '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    * engineVersions  数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineName' => 'string',
            'type' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'specCode' => 'string',
            'azStatus' => 'object',
            'engineVersions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineName  引擎名称。
    * type  节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    * vcpus  CPU核数。
    * ram  内存大小，单位为兆字节。
    * specCode  资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    * azStatus  '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    * engineVersions  数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineName' => null,
        'type' => null,
        'vcpus' => null,
        'ram' => null,
        'specCode' => null,
        'azStatus' => null,
        'engineVersions' => null
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
    * engineName  引擎名称。
    * type  节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    * vcpus  CPU核数。
    * ram  内存大小，单位为兆字节。
    * specCode  资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    * azStatus  '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    * engineVersions  数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineName' => 'engine_name',
            'type' => 'type',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'specCode' => 'spec_code',
            'azStatus' => 'az_status',
            'engineVersions' => 'engine_versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineName  引擎名称。
    * type  节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    * vcpus  CPU核数。
    * ram  内存大小，单位为兆字节。
    * specCode  资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    * azStatus  '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    * engineVersions  数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @var string[]
    */
    protected static $setters = [
            'engineName' => 'setEngineName',
            'type' => 'setType',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'specCode' => 'setSpecCode',
            'azStatus' => 'setAzStatus',
            'engineVersions' => 'setEngineVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineName  引擎名称。
    * type  节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    * vcpus  CPU核数。
    * ram  内存大小，单位为兆字节。
    * specCode  资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    * azStatus  '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    * engineVersions  数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @var string[]
    */
    protected static $getters = [
            'engineName' => 'getEngineName',
            'type' => 'getType',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'specCode' => 'getSpecCode',
            'azStatus' => 'getAzStatus',
            'engineVersions' => 'getEngineVersions'
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
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['engineVersions'] = isset($data['engineVersions']) ? $data['engineVersions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['azStatus'] === null) {
            $invalidProperties[] = "'azStatus' can't be null";
        }
        if ($this->container['engineVersions'] === null) {
            $invalidProperties[] = "'engineVersions' can't be null";
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
    * Gets engineName
    *  引擎名称。
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets type
    *  节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 节点类型。文档数据库包含以下几种节点类型： - mongos - shard - config - replica - single - readonly
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vcpus
    *  CPU核数。
    *
    * @return string
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string $vcpus CPU核数。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位为兆字节。
    *
    * @return string
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string $ram 内存大小，单位为兆字节。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets specCode
    *  资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 资源规格编码。例如：dds.mongodb.c6.xlarge.2.shard。  - “dds”表示文档数据库服务产品。 - “c6.xlarge.2”表示节点性能规格，为高内存类型。 - “shard”表示节点类型。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets azStatus
    *  '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    *
    * @return object
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param object $azStatus '支持该规格的可用区ID。' 示例：[\"cn-east-2a\",\"cn-east-2b\",\"cn-east-2c\"]。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets engineVersions
    *  数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @return string[]
    */
    public function getEngineVersions()
    {
        return $this->container['engineVersions'];
    }

    /**
    * Sets engineVersions
    *
    * @param string[] $engineVersions 数据库版本号列表。针对DDS引擎的mongos节点，例如：{\"3.4\", \"4.0\"}
    *
    * @return $this
    */
    public function setEngineVersions($engineVersions)
    {
        $this->container['engineVersions'] = $engineVersions;
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

