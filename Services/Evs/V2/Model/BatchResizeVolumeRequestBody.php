<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchResizeVolumeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchResizeVolumeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumes  The list of disks to be expanded.
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumes' => '\HuaweiCloud\SDK\Evs\V2\Model\VolumesForBatchResizeVolume[]',
            'bssParam' => '\HuaweiCloud\SDK\Evs\V2\Model\PrepaidParamForBatchResizeVolume'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumes  The list of disks to be expanded.
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumes' => null,
        'bssParam' => null
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
    * volumes  The list of disks to be expanded.
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumes' => 'volumes',
            'bssParam' => 'bss_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumes  The list of disks to be expanded.
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $setters = [
            'volumes' => 'setVolumes',
            'bssParam' => 'setBssParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumes  The list of disks to be expanded.
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $getters = [
            'volumes' => 'getVolumes',
            'bssParam' => 'getBssParam'
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
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumes'] === null) {
            $invalidProperties[] = "'volumes' can't be null";
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
    * Gets volumes
    *  The list of disks to be expanded.
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\VolumesForBatchResizeVolume[]
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\VolumesForBatchResizeVolume[] $volumes The list of disks to be expanded.
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\PrepaidParamForBatchResizeVolume|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\PrepaidParamForBatchResizeVolume|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
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

