<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobAlgorithmResponsePoliciesAutoSearch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobAlgorithmResponse_policies_auto_search';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * skipSearchParams  需要排除的超参组合。
    * rewardAttrs  搜索指标列表。
    * searchParams  搜索参数。
    * algoConfigs  搜索算法配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'skipSearchParams' => 'string',
            'rewardAttrs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchRewardAttrs[]',
            'searchParams' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchSearchParams[]',
            'algoConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchAlgoConfigs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * skipSearchParams  需要排除的超参组合。
    * rewardAttrs  搜索指标列表。
    * searchParams  搜索参数。
    * algoConfigs  搜索算法配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'skipSearchParams' => null,
        'rewardAttrs' => null,
        'searchParams' => null,
        'algoConfigs' => null
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
    * skipSearchParams  需要排除的超参组合。
    * rewardAttrs  搜索指标列表。
    * searchParams  搜索参数。
    * algoConfigs  搜索算法配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'skipSearchParams' => 'skip_search_params',
            'rewardAttrs' => 'reward_attrs',
            'searchParams' => 'search_params',
            'algoConfigs' => 'algo_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * skipSearchParams  需要排除的超参组合。
    * rewardAttrs  搜索指标列表。
    * searchParams  搜索参数。
    * algoConfigs  搜索算法配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'skipSearchParams' => 'setSkipSearchParams',
            'rewardAttrs' => 'setRewardAttrs',
            'searchParams' => 'setSearchParams',
            'algoConfigs' => 'setAlgoConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * skipSearchParams  需要排除的超参组合。
    * rewardAttrs  搜索指标列表。
    * searchParams  搜索参数。
    * algoConfigs  搜索算法配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'skipSearchParams' => 'getSkipSearchParams',
            'rewardAttrs' => 'getRewardAttrs',
            'searchParams' => 'getSearchParams',
            'algoConfigs' => 'getAlgoConfigs'
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
        $this->container['skipSearchParams'] = isset($data['skipSearchParams']) ? $data['skipSearchParams'] : null;
        $this->container['rewardAttrs'] = isset($data['rewardAttrs']) ? $data['rewardAttrs'] : null;
        $this->container['searchParams'] = isset($data['searchParams']) ? $data['searchParams'] : null;
        $this->container['algoConfigs'] = isset($data['algoConfigs']) ? $data['algoConfigs'] : null;
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
    * Gets skipSearchParams
    *  需要排除的超参组合。
    *
    * @return string|null
    */
    public function getSkipSearchParams()
    {
        return $this->container['skipSearchParams'];
    }

    /**
    * Sets skipSearchParams
    *
    * @param string|null $skipSearchParams 需要排除的超参组合。
    *
    * @return $this
    */
    public function setSkipSearchParams($skipSearchParams)
    {
        $this->container['skipSearchParams'] = $skipSearchParams;
        return $this;
    }

    /**
    * Gets rewardAttrs
    *  搜索指标列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchRewardAttrs[]|null
    */
    public function getRewardAttrs()
    {
        return $this->container['rewardAttrs'];
    }

    /**
    * Sets rewardAttrs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchRewardAttrs[]|null $rewardAttrs 搜索指标列表。
    *
    * @return $this
    */
    public function setRewardAttrs($rewardAttrs)
    {
        $this->container['rewardAttrs'] = $rewardAttrs;
        return $this;
    }

    /**
    * Gets searchParams
    *  搜索参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchSearchParams[]|null
    */
    public function getSearchParams()
    {
        return $this->container['searchParams'];
    }

    /**
    * Sets searchParams
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchSearchParams[]|null $searchParams 搜索参数。
    *
    * @return $this
    */
    public function setSearchParams($searchParams)
    {
        $this->container['searchParams'] = $searchParams;
        return $this;
    }

    /**
    * Gets algoConfigs
    *  搜索算法配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchAlgoConfigs[]|null
    */
    public function getAlgoConfigs()
    {
        return $this->container['algoConfigs'];
    }

    /**
    * Sets algoConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePoliciesAutoSearchAlgoConfigs[]|null $algoConfigs 搜索算法配置。
    *
    * @return $this
    */
    public function setAlgoConfigs($algoConfigs)
    {
        $this->container['algoConfigs'] = $algoConfigs;
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

