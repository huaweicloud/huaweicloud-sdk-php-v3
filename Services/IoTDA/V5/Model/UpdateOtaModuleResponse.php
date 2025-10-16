<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateOtaModuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateOtaModuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * moduleId  OTA模块ID
    * appId  资源空间ID
    * productId  OTA模块关联的产品ID
    * productName  OTA模块关联的产品名称
    * moduleName  OTA模块名称。
    * aliasName  OTA模块别名
    * description  用于描述模块的功能等信息
    * createTime  创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'moduleId' => 'string',
            'appId' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'moduleName' => 'string',
            'aliasName' => 'string',
            'description' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * moduleId  OTA模块ID
    * appId  资源空间ID
    * productId  OTA模块关联的产品ID
    * productName  OTA模块关联的产品名称
    * moduleName  OTA模块名称。
    * aliasName  OTA模块别名
    * description  用于描述模块的功能等信息
    * createTime  创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'moduleId' => null,
        'appId' => null,
        'productId' => null,
        'productName' => null,
        'moduleName' => null,
        'aliasName' => null,
        'description' => null,
        'createTime' => null
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
    * moduleId  OTA模块ID
    * appId  资源空间ID
    * productId  OTA模块关联的产品ID
    * productName  OTA模块关联的产品名称
    * moduleName  OTA模块名称。
    * aliasName  OTA模块别名
    * description  用于描述模块的功能等信息
    * createTime  创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'moduleId' => 'module_id',
            'appId' => 'app_id',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'moduleName' => 'module_name',
            'aliasName' => 'alias_name',
            'description' => 'description',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * moduleId  OTA模块ID
    * appId  资源空间ID
    * productId  OTA模块关联的产品ID
    * productName  OTA模块关联的产品名称
    * moduleName  OTA模块名称。
    * aliasName  OTA模块别名
    * description  用于描述模块的功能等信息
    * createTime  创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'moduleId' => 'setModuleId',
            'appId' => 'setAppId',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'moduleName' => 'setModuleName',
            'aliasName' => 'setAliasName',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * moduleId  OTA模块ID
    * appId  资源空间ID
    * productId  OTA模块关联的产品ID
    * productName  OTA模块关联的产品名称
    * moduleName  OTA模块名称。
    * aliasName  OTA模块别名
    * description  用于描述模块的功能等信息
    * createTime  创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'moduleId' => 'getModuleId',
            'appId' => 'getAppId',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'moduleName' => 'getModuleName',
            'aliasName' => 'getAliasName',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime'
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
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['aliasName'] = isset($data['aliasName']) ? $data['aliasName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets moduleId
    *  OTA模块ID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId OTA模块ID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets appId
    *  资源空间ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 资源空间ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets productId
    *  OTA模块关联的产品ID
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId OTA模块关联的产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  OTA模块关联的产品名称
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName OTA模块关联的产品名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets moduleName
    *  OTA模块名称。
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName OTA模块名称。
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets aliasName
    *  OTA模块别名
    *
    * @return string|null
    */
    public function getAliasName()
    {
        return $this->container['aliasName'];
    }

    /**
    * Sets aliasName
    *
    * @param string|null $aliasName OTA模块别名
    *
    * @return $this
    */
    public function setAliasName($aliasName)
    {
        $this->container['aliasName'] = $aliasName;
        return $this;
    }

    /**
    * Gets description
    *  用于描述模块的功能等信息
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
    * @param string|null $description 用于描述模块的功能等信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建OTA模块的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

