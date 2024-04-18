<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenGaussUpgradeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenGaussUpgradeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeType  实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    * targetVersion  实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    * upgradeShardNum  分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    * upgradeAz  主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeType' => 'string',
            'upgradeAction' => 'string',
            'targetVersion' => 'string',
            'upgradeShardNum' => 'int',
            'upgradeAz' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeType  实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    * targetVersion  实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    * upgradeShardNum  分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    * upgradeAz  主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeType' => null,
        'upgradeAction' => null,
        'targetVersion' => null,
        'upgradeShardNum' => 'int32',
        'upgradeAz' => null
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
    * upgradeType  实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    * targetVersion  实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    * upgradeShardNum  分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    * upgradeAz  主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeType' => 'upgrade_type',
            'upgradeAction' => 'upgrade_action',
            'targetVersion' => 'target_version',
            'upgradeShardNum' => 'upgrade_shard_num',
            'upgradeAz' => 'upgrade_az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeType  实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    * targetVersion  实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    * upgradeShardNum  分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    * upgradeAz  主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeType' => 'setUpgradeType',
            'upgradeAction' => 'setUpgradeAction',
            'targetVersion' => 'setTargetVersion',
            'upgradeShardNum' => 'setUpgradeShardNum',
            'upgradeAz' => 'setUpgradeAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeType  实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    * targetVersion  实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    * upgradeShardNum  分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    * upgradeAz  主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeType' => 'getUpgradeType',
            'upgradeAction' => 'getUpgradeAction',
            'targetVersion' => 'getTargetVersion',
            'upgradeShardNum' => 'getUpgradeShardNum',
            'upgradeAz' => 'getUpgradeAz'
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
        $this->container['upgradeType'] = isset($data['upgradeType']) ? $data['upgradeType'] : null;
        $this->container['upgradeAction'] = isset($data['upgradeAction']) ? $data['upgradeAction'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['upgradeShardNum'] = isset($data['upgradeShardNum']) ? $data['upgradeShardNum'] : null;
        $this->container['upgradeAz'] = isset($data['upgradeAz']) ? $data['upgradeAz'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['upgradeType'] === null) {
            $invalidProperties[] = "'upgradeType' can't be null";
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
    * Gets upgradeType
    *  实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    *
    * @return string
    */
    public function getUpgradeType()
    {
        return $this->container['upgradeType'];
    }

    /**
    * Sets upgradeType
    *
    * @param string $upgradeType 实例升级类型，包括就地升级，灰度升级，热补丁升级三种，三种升级方式的异同，详见接口描述。  inplace 就地升级  grey 灰度升级  hotfix 热补丁升级。
    *
    * @return $this
    */
    public function setUpgradeType($upgradeType)
    {
        $this->container['upgradeType'] = $upgradeType;
        return $this;
    }

    /**
    * Gets upgradeAction
    *  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    *
    * @return string|null
    */
    public function getUpgradeAction()
    {
        return $this->container['upgradeAction'];
    }

    /**
    * Sets upgradeAction
    *
    * @param string|null $upgradeAction 实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。热补丁升级包括升级自动提交，升级回退两种。详见接口描述。  upgradeAutoCommit 升级自动提交  upgrade 升级待观察  commit 提交升级  rollback 升级回退。
    *
    * @return $this
    */
    public function setUpgradeAction($upgradeAction)
    {
        $this->container['upgradeAction'] = $upgradeAction;
        return $this;
    }

    /**
    * Gets targetVersion
    *  实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 实例升级目标版本，非必填。如果未传值则默认升级到当前实例的优选版本。仅热补丁升级方式下支持传入多个值，升级操作为升级自动提交，则实例版本从小到大批量升级，升级操作为升级回退，则实例版本从大到小批量回退。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets upgradeShardNum
    *  分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    *
    * @return int|null
    */
    public function getUpgradeShardNum()
    {
        return $this->container['upgradeShardNum'];
    }

    /**
    * Sets upgradeShardNum
    *
    * @param int|null $upgradeShardNum 分布式实例灰度升级，滚动升级分片数。分布式实例灰度升级，升级待观察必填。该值不能大于实例未升级分片总数。
    *
    * @return $this
    */
    public function setUpgradeShardNum($upgradeShardNum)
    {
        $this->container['upgradeShardNum'] = $upgradeShardNum;
        return $this;
    }

    /**
    * Gets upgradeAz
    *  主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @return string|null
    */
    public function getUpgradeAz()
    {
        return $this->container['upgradeAz'];
    }

    /**
    * Sets upgradeAz
    *
    * @param string|null $upgradeAz 主备版实例灰度升级，滚动升级az值，可以支持多az一起升级，az之间以’,’分割。集中式实例灰度升级，升级待观察必填。该值不能填入不属于该实例的az值。
    *
    * @return $this
    */
    public function setUpgradeAz($upgradeAz)
    {
        $this->container['upgradeAz'] = $upgradeAz;
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

