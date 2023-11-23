<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceFlavorResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceFlavorResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * num  节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    * storage  磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    * size  磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    * specCode  资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'num' => 'string',
            'storage' => 'string',
            'size' => 'string',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * num  节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    * storage  磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    * size  磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    * specCode  资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'num' => null,
        'storage' => null,
        'size' => null,
        'specCode' => null
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
    * num  节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    * storage  磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    * size  磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    * specCode  资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'num' => 'num',
            'storage' => 'storage',
            'size' => 'size',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * num  节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    * storage  磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    * size  磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    * specCode  资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'num' => 'setNum',
            'storage' => 'setStorage',
            'size' => 'setSize',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * num  节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    * storage  磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    * size  磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    * specCode  资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'num' => 'getNum',
            'storage' => 'getStorage',
            'size' => 'getSize',
            'specCode' => 'getSpecCode'
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
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
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
    * Gets num
    *  节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    *
    * @return string|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param string|null $num 节点数量。   - GeminiDB Cassandra实例的节点数量可取3~12。   - GeminiDB Mongo4.0版本副本集实例的节点数量可取3。   - GeminiDB Influx实例的节点数量可取3~16。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets storage
    *  磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    *
    * @return string|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param string|null $storage 磁盘类型。 取值为“ULTRAHIGH”，表示SSD盘。
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets size
    *  磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 磁盘大小。必须为10的整数倍。单位为GB。最小磁盘容量100GB，最大磁盘容量与实例的性能规格有关，详见数据库实例规格。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets specCode
    *  资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 资源规格编码。获取方法请参见查询所有实例规格信息中响应参数“spec_code”的值。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
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

