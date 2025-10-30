<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTuningParamsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTuningParamsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fullSync  全量调优参数
    * increCapture  增量抓取调优参数
    * increApply  增量回放调优参数
    * increRelay  增量日志拉取调优参数
    * modifyResult  参数修改是否成功，查询参数时不返回该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fullSync' => '\HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]',
            'increCapture' => '\HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]',
            'increApply' => '\HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]',
            'increRelay' => '\HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]',
            'modifyResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fullSync  全量调优参数
    * increCapture  增量抓取调优参数
    * increApply  增量回放调优参数
    * increRelay  增量日志拉取调优参数
    * modifyResult  参数修改是否成功，查询参数时不返回该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fullSync' => null,
        'increCapture' => null,
        'increApply' => null,
        'increRelay' => null,
        'modifyResult' => null
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
    * fullSync  全量调优参数
    * increCapture  增量抓取调优参数
    * increApply  增量回放调优参数
    * increRelay  增量日志拉取调优参数
    * modifyResult  参数修改是否成功，查询参数时不返回该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fullSync' => 'full_sync',
            'increCapture' => 'incre_capture',
            'increApply' => 'incre_apply',
            'increRelay' => 'incre_relay',
            'modifyResult' => 'modify_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fullSync  全量调优参数
    * increCapture  增量抓取调优参数
    * increApply  增量回放调优参数
    * increRelay  增量日志拉取调优参数
    * modifyResult  参数修改是否成功，查询参数时不返回该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'fullSync' => 'setFullSync',
            'increCapture' => 'setIncreCapture',
            'increApply' => 'setIncreApply',
            'increRelay' => 'setIncreRelay',
            'modifyResult' => 'setModifyResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fullSync  全量调优参数
    * increCapture  增量抓取调优参数
    * increApply  增量回放调优参数
    * increRelay  增量日志拉取调优参数
    * modifyResult  参数修改是否成功，查询参数时不返回该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'fullSync' => 'getFullSync',
            'increCapture' => 'getIncreCapture',
            'increApply' => 'getIncreApply',
            'increRelay' => 'getIncreRelay',
            'modifyResult' => 'getModifyResult'
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
        $this->container['fullSync'] = isset($data['fullSync']) ? $data['fullSync'] : null;
        $this->container['increCapture'] = isset($data['increCapture']) ? $data['increCapture'] : null;
        $this->container['increApply'] = isset($data['increApply']) ? $data['increApply'] : null;
        $this->container['increRelay'] = isset($data['increRelay']) ? $data['increRelay'] : null;
        $this->container['modifyResult'] = isset($data['modifyResult']) ? $data['modifyResult'] : null;
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
    * Gets fullSync
    *  全量调优参数
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null
    */
    public function getFullSync()
    {
        return $this->container['fullSync'];
    }

    /**
    * Sets fullSync
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null $fullSync 全量调优参数
    *
    * @return $this
    */
    public function setFullSync($fullSync)
    {
        $this->container['fullSync'] = $fullSync;
        return $this;
    }

    /**
    * Gets increCapture
    *  增量抓取调优参数
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null
    */
    public function getIncreCapture()
    {
        return $this->container['increCapture'];
    }

    /**
    * Sets increCapture
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null $increCapture 增量抓取调优参数
    *
    * @return $this
    */
    public function setIncreCapture($increCapture)
    {
        $this->container['increCapture'] = $increCapture;
        return $this;
    }

    /**
    * Gets increApply
    *  增量回放调优参数
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null
    */
    public function getIncreApply()
    {
        return $this->container['increApply'];
    }

    /**
    * Sets increApply
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null $increApply 增量回放调优参数
    *
    * @return $this
    */
    public function setIncreApply($increApply)
    {
        $this->container['increApply'] = $increApply;
        return $this;
    }

    /**
    * Gets increRelay
    *  增量日志拉取调优参数
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null
    */
    public function getIncreRelay()
    {
        return $this->container['increRelay'];
    }

    /**
    * Sets increRelay
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\TuningParameter[]|null $increRelay 增量日志拉取调优参数
    *
    * @return $this
    */
    public function setIncreRelay($increRelay)
    {
        $this->container['increRelay'] = $increRelay;
        return $this;
    }

    /**
    * Gets modifyResult
    *  参数修改是否成功，查询参数时不返回该字段。
    *
    * @return string|null
    */
    public function getModifyResult()
    {
        return $this->container['modifyResult'];
    }

    /**
    * Sets modifyResult
    *
    * @param string|null $modifyResult 参数修改是否成功，查询参数时不返回该字段。
    *
    * @return $this
    */
    public function setModifyResult($modifyResult)
    {
        $this->container['modifyResult'] = $modifyResult;
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

