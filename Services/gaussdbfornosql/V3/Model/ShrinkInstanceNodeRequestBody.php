<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkInstanceNodeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkInstanceNodeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * num  随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    * nodeList  指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'num' => 'int',
            'nodeList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * num  随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    * nodeList  指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'num' => null,
        'nodeList' => null
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
    * num  随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    * nodeList  指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'num' => 'num',
            'nodeList' => 'node_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * num  随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    * nodeList  指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @var string[]
    */
    protected static $setters = [
            'num' => 'setNum',
            'nodeList' => 'setNodeList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * num  随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    * nodeList  指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @var string[]
    */
    protected static $getters = [
            'num' => 'getNum',
            'nodeList' => 'getNodeList'
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
        $this->container['nodeList'] = isset($data['nodeList']) ? $data['nodeList'] : null;
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
    *  随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num 随机缩减的节点数量。 - GaussDB(for Cassandra)实例该字段取值为1~10。 - GaussDB(for Redis)该字段取值为1。 说明： 如果客户端采用直连节点方式，不推荐使用随机节点缩容。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets nodeList
    *  指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @return string[]|null
    */
    public function getNodeList()
    {
        return $this->container['nodeList'];
    }

    /**
    * Sets nodeList
    *
    * @param string[]|null $nodeList 指定缩容节点的ID，且该节点必须支持节点缩容。如果该字段不传指定缩减的节点ID，将根据系统内部策略缩减指定个数的节点。说明： - num与node_list必须有一个字段传值。   - 如果node_list传值时，GaussDB(for Cassandra)长度必须为1~10，GaussDB(for Redis) 长度必须为1。   - 如果num与node_list同时传值时，则以node_list的值为主。 - 如果node_list取值为空时，缩容以随机节点缩容进行；node_list字段取值不为空，缩容以指定节点ID进行。 - 节点缩容前，请避免直连节点，以防该节点缩容导致业务中断。
    *
    * @return $this
    */
    public function setNodeList($nodeList)
    {
        $this->container['nodeList'] = $nodeList;
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

