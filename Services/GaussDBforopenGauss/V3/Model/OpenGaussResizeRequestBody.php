<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenGaussResizeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenGaussResizeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * isAutoPay  **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    * cnConcurrentResizeNum  **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    * dnConcurrentResizeNum  **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'isAutoPay' => 'bool',
            'cnConcurrentResizeNum' => 'int',
            'dnConcurrentResizeNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * isAutoPay  **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    * cnConcurrentResizeNum  **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    * dnConcurrentResizeNum  **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'isAutoPay' => null,
        'cnConcurrentResizeNum' => null,
        'dnConcurrentResizeNum' => null
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
    * flavorRef  **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * isAutoPay  **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    * cnConcurrentResizeNum  **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    * dnConcurrentResizeNum  **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavor_ref',
            'isAutoPay' => 'is_auto_pay',
            'cnConcurrentResizeNum' => 'cn_concurrent_resize_num',
            'dnConcurrentResizeNum' => 'dn_concurrent_resize_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * isAutoPay  **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    * cnConcurrentResizeNum  **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    * dnConcurrentResizeNum  **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'isAutoPay' => 'setIsAutoPay',
            'cnConcurrentResizeNum' => 'setCnConcurrentResizeNum',
            'dnConcurrentResizeNum' => 'setDnConcurrentResizeNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * isAutoPay  **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    * cnConcurrentResizeNum  **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    * dnConcurrentResizeNum  **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'isAutoPay' => 'getIsAutoPay',
            'cnConcurrentResizeNum' => 'getCnConcurrentResizeNum',
            'dnConcurrentResizeNum' => 'getDnConcurrentResizeNum'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['cnConcurrentResizeNum'] = isset($data['cnConcurrentResizeNum']) ? $data['cnConcurrentResizeNum'] : null;
        $this->container['dnConcurrentResizeNum'] = isset($data['dnConcurrentResizeNum']) ? $data['dnConcurrentResizeNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
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
    * Gets flavorRef
    *  **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef **参数解释**: 规格变更的新规格的资源规格编码。参考表1中的“规格编码”列内容获取。参考查询数据库规格 - QueryingInstanceSpecifications中“spec_code”字段获取。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay **参数解释**: 包周期实例时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。  **默认取值**: false
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets cnConcurrentResizeNum
    *  **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    *
    * @return int|null
    */
    public function getCnConcurrentResizeNum()
    {
        return $this->container['cnConcurrentResizeNum'];
    }

    /**
    * Sets cnConcurrentResizeNum
    *
    * @param int|null $cnConcurrentResizeNum **参数解释**: 指定CN节点的规格变更并行数。 调整CN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，请根据当前系统负载评估剩余CN节点业务负载变化情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 仅对独立部署形态实例生效。 **取值范围**: [1, floor(总协调节点数/2)]，单批次最多变更20个协调节点。 **默认取值**: 1
    *
    * @return $this
    */
    public function setCnConcurrentResizeNum($cnConcurrentResizeNum)
    {
        $this->container['cnConcurrentResizeNum'] = $cnConcurrentResizeNum;
        return $this;
    }

    /**
    * Gets dnConcurrentResizeNum
    *  **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @return int|null
    */
    public function getDnConcurrentResizeNum()
    {
        return $this->container['dnConcurrentResizeNum'];
    }

    /**
    * Sets dnConcurrentResizeNum
    *
    * @param int|null $dnConcurrentResizeNum **参数解释**: 指定DN节点的规格变更并行数。 调整DN节点并行变更数可以加快规格变更的过程，建议使用系统默认配置的规格。如需调整，建议根据当前系统负载评估短时间内倒换DN节点数量情况，确保业务稳定性和中断时长在可接受范围内。 **约束限制**: 不涉及。 **取值范围**: - 当总分片数<=5时，取值范围为[1, 总分片数]。 - 当总分片数＞5时，取值范围为[1, max(floor(分片数/2),5)]，单批次最多变更20个分片。  **默认取值**: 不指定分片并发数时，分为以下两种情况： - 当总分片数<=5时，默认一起变更。 - 当总分片数＞5时，默认每次变更5个，最后一批可不足5个。
    *
    * @return $this
    */
    public function setDnConcurrentResizeNum($dnConcurrentResizeNum)
    {
        $this->container['dnConcurrentResizeNum'] = $dnConcurrentResizeNum;
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

