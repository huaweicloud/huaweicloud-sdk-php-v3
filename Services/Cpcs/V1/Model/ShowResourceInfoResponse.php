<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudService  cloudService
    * ccspService  ccspService
    * vsm  vsm
    * app  app
    * kms  kms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudService' => '\HuaweiCloud\SDK\Cpcs\V1\Model\CloudServiceInfo',
            'ccspService' => '\HuaweiCloud\SDK\Cpcs\V1\Model\CcspServiceInfo',
            'vsm' => '\HuaweiCloud\SDK\Cpcs\V1\Model\VsmResourceInfo',
            'app' => '\HuaweiCloud\SDK\Cpcs\V1\Model\AppResourceInfo',
            'kms' => '\HuaweiCloud\SDK\Cpcs\V1\Model\KmsResourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudService  cloudService
    * ccspService  ccspService
    * vsm  vsm
    * app  app
    * kms  kms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudService' => null,
        'ccspService' => null,
        'vsm' => null,
        'app' => null,
        'kms' => null
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
    * cloudService  cloudService
    * ccspService  ccspService
    * vsm  vsm
    * app  app
    * kms  kms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudService' => 'cloud_service',
            'ccspService' => 'ccsp_service',
            'vsm' => 'vsm',
            'app' => 'app',
            'kms' => 'kms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudService  cloudService
    * ccspService  ccspService
    * vsm  vsm
    * app  app
    * kms  kms
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudService' => 'setCloudService',
            'ccspService' => 'setCcspService',
            'vsm' => 'setVsm',
            'app' => 'setApp',
            'kms' => 'setKms'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudService  cloudService
    * ccspService  ccspService
    * vsm  vsm
    * app  app
    * kms  kms
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudService' => 'getCloudService',
            'ccspService' => 'getCcspService',
            'vsm' => 'getVsm',
            'app' => 'getApp',
            'kms' => 'getKms'
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
        $this->container['cloudService'] = isset($data['cloudService']) ? $data['cloudService'] : null;
        $this->container['ccspService'] = isset($data['ccspService']) ? $data['ccspService'] : null;
        $this->container['vsm'] = isset($data['vsm']) ? $data['vsm'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['kms'] = isset($data['kms']) ? $data['kms'] : null;
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
    * Gets cloudService
    *  cloudService
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\CloudServiceInfo|null
    */
    public function getCloudService()
    {
        return $this->container['cloudService'];
    }

    /**
    * Sets cloudService
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\CloudServiceInfo|null $cloudService cloudService
    *
    * @return $this
    */
    public function setCloudService($cloudService)
    {
        $this->container['cloudService'] = $cloudService;
        return $this;
    }

    /**
    * Gets ccspService
    *  ccspService
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\CcspServiceInfo|null
    */
    public function getCcspService()
    {
        return $this->container['ccspService'];
    }

    /**
    * Sets ccspService
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\CcspServiceInfo|null $ccspService ccspService
    *
    * @return $this
    */
    public function setCcspService($ccspService)
    {
        $this->container['ccspService'] = $ccspService;
        return $this;
    }

    /**
    * Gets vsm
    *  vsm
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\VsmResourceInfo|null
    */
    public function getVsm()
    {
        return $this->container['vsm'];
    }

    /**
    * Sets vsm
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\VsmResourceInfo|null $vsm vsm
    *
    * @return $this
    */
    public function setVsm($vsm)
    {
        $this->container['vsm'] = $vsm;
        return $this;
    }

    /**
    * Gets app
    *  app
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\AppResourceInfo|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\AppResourceInfo|null $app app
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets kms
    *  kms
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\KmsResourceInfo|null
    */
    public function getKms()
    {
        return $this->container['kms'];
    }

    /**
    * Sets kms
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\KmsResourceInfo|null $kms kms
    *
    * @return $this
    */
    public function setKms($kms)
    {
        $this->container['kms'] = $kms;
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

