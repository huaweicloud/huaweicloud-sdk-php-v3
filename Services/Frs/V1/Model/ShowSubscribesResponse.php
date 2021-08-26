<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubscribesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubscribesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxFaceSetNumber  调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    * detectService  detectService
    * liveDetectService  liveDetectService
    * compareService  compareService
    * searchService  searchService
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxFaceSetNumber' => 'int',
            'detectService' => '\HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo',
            'liveDetectService' => '\HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo',
            'compareService' => '\HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo',
            'searchService' => '\HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxFaceSetNumber  调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    * detectService  detectService
    * liveDetectService  liveDetectService
    * compareService  compareService
    * searchService  searchService
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxFaceSetNumber' => 'int32',
        'detectService' => null,
        'liveDetectService' => null,
        'compareService' => null,
        'searchService' => null
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
    * maxFaceSetNumber  调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    * detectService  detectService
    * liveDetectService  liveDetectService
    * compareService  compareService
    * searchService  searchService
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxFaceSetNumber' => 'max_face_set_number',
            'detectService' => 'detect_service',
            'liveDetectService' => 'live_detect_service',
            'compareService' => 'compare_service',
            'searchService' => 'search_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxFaceSetNumber  调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    * detectService  detectService
    * liveDetectService  liveDetectService
    * compareService  compareService
    * searchService  searchService
    *
    * @var string[]
    */
    protected static $setters = [
            'maxFaceSetNumber' => 'setMaxFaceSetNumber',
            'detectService' => 'setDetectService',
            'liveDetectService' => 'setLiveDetectService',
            'compareService' => 'setCompareService',
            'searchService' => 'setSearchService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxFaceSetNumber  调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    * detectService  detectService
    * liveDetectService  liveDetectService
    * compareService  compareService
    * searchService  searchService
    *
    * @var string[]
    */
    protected static $getters = [
            'maxFaceSetNumber' => 'getMaxFaceSetNumber',
            'detectService' => 'getDetectService',
            'liveDetectService' => 'getLiveDetectService',
            'compareService' => 'getCompareService',
            'searchService' => 'getSearchService'
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
        $this->container['maxFaceSetNumber'] = isset($data['maxFaceSetNumber']) ? $data['maxFaceSetNumber'] : null;
        $this->container['detectService'] = isset($data['detectService']) ? $data['detectService'] : null;
        $this->container['liveDetectService'] = isset($data['liveDetectService']) ? $data['liveDetectService'] : null;
        $this->container['compareService'] = isset($data['compareService']) ? $data['compareService'] : null;
        $this->container['searchService'] = isset($data['searchService']) ? $data['searchService'] : null;
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
    * Gets maxFaceSetNumber
    *  调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    *
    * @return int|null
    */
    public function getMaxFaceSetNumber()
    {
        return $this->container['maxFaceSetNumber'];
    }

    /**
    * Sets maxFaceSetNumber
    *
    * @param int|null $maxFaceSetNumber 调用成功时表示最大的人脸库数量。 调用失败时无此字段。
    *
    * @return $this
    */
    public function setMaxFaceSetNumber($maxFaceSetNumber)
    {
        $this->container['maxFaceSetNumber'] = $maxFaceSetNumber;
        return $this;
    }

    /**
    * Gets detectService
    *  detectService
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null
    */
    public function getDetectService()
    {
        return $this->container['detectService'];
    }

    /**
    * Sets detectService
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null $detectService detectService
    *
    * @return $this
    */
    public function setDetectService($detectService)
    {
        $this->container['detectService'] = $detectService;
        return $this;
    }

    /**
    * Gets liveDetectService
    *  liveDetectService
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null
    */
    public function getLiveDetectService()
    {
        return $this->container['liveDetectService'];
    }

    /**
    * Sets liveDetectService
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null $liveDetectService liveDetectService
    *
    * @return $this
    */
    public function setLiveDetectService($liveDetectService)
    {
        $this->container['liveDetectService'] = $liveDetectService;
        return $this;
    }

    /**
    * Gets compareService
    *  compareService
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null
    */
    public function getCompareService()
    {
        return $this->container['compareService'];
    }

    /**
    * Sets compareService
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null $compareService compareService
    *
    * @return $this
    */
    public function setCompareService($compareService)
    {
        $this->container['compareService'] = $compareService;
        return $this;
    }

    /**
    * Gets searchService
    *  searchService
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null
    */
    public function getSearchService()
    {
        return $this->container['searchService'];
    }

    /**
    * Sets searchService
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\ServiceInfo|null $searchService searchService
    *
    * @return $this
    */
    public function setSearchService($searchService)
    {
        $this->container['searchService'] = $searchService;
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

