<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConnectorReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConnectorReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specification  部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    * nodeCnt  Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    * specCode  转储节点规格编码。仅老规格实例需要填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specification' => 'string',
            'nodeCnt' => 'string',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specification  部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    * nodeCnt  Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    * specCode  转储节点规格编码。仅老规格实例需要填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specification' => null,
        'nodeCnt' => null,
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
    * specification  部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    * nodeCnt  Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    * specCode  转储节点规格编码。仅老规格实例需要填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specification' => 'specification',
            'nodeCnt' => 'node_cnt',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specification  部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    * nodeCnt  Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    * specCode  转储节点规格编码。仅老规格实例需要填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'specification' => 'setSpecification',
            'nodeCnt' => 'setNodeCnt',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specification  部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    * nodeCnt  Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    * specCode  转储节点规格编码。仅老规格实例需要填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'specification' => 'getSpecification',
            'nodeCnt' => 'getNodeCnt',
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
    const SPECIFICATION__100_MB = '100MB';
    const SPECIFICATION__300_MB = '300MB';
    const SPECIFICATION__600_MB = '600MB';
    const SPECIFICATION__1200_MB = '1200MB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecificationAllowableValues()
    {
        return [
            self::SPECIFICATION__100_MB,
            self::SPECIFICATION__300_MB,
            self::SPECIFICATION__600_MB,
            self::SPECIFICATION__1200_MB,
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
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['nodeCnt'] = isset($data['nodeCnt']) ? $data['nodeCnt'] : null;
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
            $allowedValues = $this->getSpecificationAllowableValues();
                if (!is_null($this->container['specification']) && !in_array($this->container['specification'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specification', must be one of '%s'",
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
    * Gets specification
    *  部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 部署Smart Connect的规格，基准带宽，表示单位时间内传送的最大数据量。请保持和当前实例规格一致。仅老规格实例需要填写。 取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets nodeCnt
    *  Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    *
    * @return string|null
    */
    public function getNodeCnt()
    {
        return $this->container['nodeCnt'];
    }

    /**
    * Sets nodeCnt
    *
    * @param string|null $nodeCnt Smart Connect节点数量。不能小于2个。 如果不填，默认是2个。
    *
    * @return $this
    */
    public function setNodeCnt($nodeCnt)
    {
        $this->container['nodeCnt'] = $nodeCnt;
        return $this;
    }

    /**
    * Gets specCode
    *  转储节点规格编码。仅老规格实例需要填写。
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
    * @param string|null $specCode 转储节点规格编码。仅老规格实例需要填写。
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

