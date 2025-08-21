<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CesQueryRespQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CesQueryResp_query';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * medialiveMpc  medialiveMpc
    * pipeline  pipeline
    * audio  audio
    * medialiveCdn  medialiveCdn
    * medialivePackage  medialivePackage
    * medialiveConnect  medialiveConnect
    * medialiveTailor  medialiveTailor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'medialiveMpc' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem',
            'pipeline' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem',
            'audio' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem',
            'medialiveCdn' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem',
            'medialivePackage' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem',
            'medialiveConnect' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem',
            'medialiveTailor' => '\HuaweiCloud\SDK\Live\V1\Model\CesDimsItem'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * medialiveMpc  medialiveMpc
    * pipeline  pipeline
    * audio  audio
    * medialiveCdn  medialiveCdn
    * medialivePackage  medialivePackage
    * medialiveConnect  medialiveConnect
    * medialiveTailor  medialiveTailor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'medialiveMpc' => null,
        'pipeline' => null,
        'audio' => null,
        'medialiveCdn' => null,
        'medialivePackage' => null,
        'medialiveConnect' => null,
        'medialiveTailor' => null
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
    * medialiveMpc  medialiveMpc
    * pipeline  pipeline
    * audio  audio
    * medialiveCdn  medialiveCdn
    * medialivePackage  medialivePackage
    * medialiveConnect  medialiveConnect
    * medialiveTailor  medialiveTailor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'medialiveMpc' => 'medialive_mpc',
            'pipeline' => 'pipeline',
            'audio' => 'audio',
            'medialiveCdn' => 'medialive_cdn',
            'medialivePackage' => 'medialive_package',
            'medialiveConnect' => 'medialive_connect',
            'medialiveTailor' => 'medialive_tailor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * medialiveMpc  medialiveMpc
    * pipeline  pipeline
    * audio  audio
    * medialiveCdn  medialiveCdn
    * medialivePackage  medialivePackage
    * medialiveConnect  medialiveConnect
    * medialiveTailor  medialiveTailor
    *
    * @var string[]
    */
    protected static $setters = [
            'medialiveMpc' => 'setMedialiveMpc',
            'pipeline' => 'setPipeline',
            'audio' => 'setAudio',
            'medialiveCdn' => 'setMedialiveCdn',
            'medialivePackage' => 'setMedialivePackage',
            'medialiveConnect' => 'setMedialiveConnect',
            'medialiveTailor' => 'setMedialiveTailor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * medialiveMpc  medialiveMpc
    * pipeline  pipeline
    * audio  audio
    * medialiveCdn  medialiveCdn
    * medialivePackage  medialivePackage
    * medialiveConnect  medialiveConnect
    * medialiveTailor  medialiveTailor
    *
    * @var string[]
    */
    protected static $getters = [
            'medialiveMpc' => 'getMedialiveMpc',
            'pipeline' => 'getPipeline',
            'audio' => 'getAudio',
            'medialiveCdn' => 'getMedialiveCdn',
            'medialivePackage' => 'getMedialivePackage',
            'medialiveConnect' => 'getMedialiveConnect',
            'medialiveTailor' => 'getMedialiveTailor'
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
        $this->container['medialiveMpc'] = isset($data['medialiveMpc']) ? $data['medialiveMpc'] : null;
        $this->container['pipeline'] = isset($data['pipeline']) ? $data['pipeline'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
        $this->container['medialiveCdn'] = isset($data['medialiveCdn']) ? $data['medialiveCdn'] : null;
        $this->container['medialivePackage'] = isset($data['medialivePackage']) ? $data['medialivePackage'] : null;
        $this->container['medialiveConnect'] = isset($data['medialiveConnect']) ? $data['medialiveConnect'] : null;
        $this->container['medialiveTailor'] = isset($data['medialiveTailor']) ? $data['medialiveTailor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['medialiveMpc'] === null) {
            $invalidProperties[] = "'medialiveMpc' can't be null";
        }
        if ($this->container['pipeline'] === null) {
            $invalidProperties[] = "'pipeline' can't be null";
        }
        if ($this->container['audio'] === null) {
            $invalidProperties[] = "'audio' can't be null";
        }
        if ($this->container['medialiveCdn'] === null) {
            $invalidProperties[] = "'medialiveCdn' can't be null";
        }
        if ($this->container['medialivePackage'] === null) {
            $invalidProperties[] = "'medialivePackage' can't be null";
        }
        if ($this->container['medialiveConnect'] === null) {
            $invalidProperties[] = "'medialiveConnect' can't be null";
        }
        if ($this->container['medialiveTailor'] === null) {
            $invalidProperties[] = "'medialiveTailor' can't be null";
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
    * Gets medialiveMpc
    *  medialiveMpc
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getMedialiveMpc()
    {
        return $this->container['medialiveMpc'];
    }

    /**
    * Sets medialiveMpc
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $medialiveMpc medialiveMpc
    *
    * @return $this
    */
    public function setMedialiveMpc($medialiveMpc)
    {
        $this->container['medialiveMpc'] = $medialiveMpc;
        return $this;
    }

    /**
    * Gets pipeline
    *  pipeline
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getPipeline()
    {
        return $this->container['pipeline'];
    }

    /**
    * Sets pipeline
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $pipeline pipeline
    *
    * @return $this
    */
    public function setPipeline($pipeline)
    {
        $this->container['pipeline'] = $pipeline;
        return $this;
    }

    /**
    * Gets audio
    *  audio
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $audio audio
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
        return $this;
    }

    /**
    * Gets medialiveCdn
    *  medialiveCdn
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getMedialiveCdn()
    {
        return $this->container['medialiveCdn'];
    }

    /**
    * Sets medialiveCdn
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $medialiveCdn medialiveCdn
    *
    * @return $this
    */
    public function setMedialiveCdn($medialiveCdn)
    {
        $this->container['medialiveCdn'] = $medialiveCdn;
        return $this;
    }

    /**
    * Gets medialivePackage
    *  medialivePackage
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getMedialivePackage()
    {
        return $this->container['medialivePackage'];
    }

    /**
    * Sets medialivePackage
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $medialivePackage medialivePackage
    *
    * @return $this
    */
    public function setMedialivePackage($medialivePackage)
    {
        $this->container['medialivePackage'] = $medialivePackage;
        return $this;
    }

    /**
    * Gets medialiveConnect
    *  medialiveConnect
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getMedialiveConnect()
    {
        return $this->container['medialiveConnect'];
    }

    /**
    * Sets medialiveConnect
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $medialiveConnect medialiveConnect
    *
    * @return $this
    */
    public function setMedialiveConnect($medialiveConnect)
    {
        $this->container['medialiveConnect'] = $medialiveConnect;
        return $this;
    }

    /**
    * Gets medialiveTailor
    *  medialiveTailor
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem
    */
    public function getMedialiveTailor()
    {
        return $this->container['medialiveTailor'];
    }

    /**
    * Sets medialiveTailor
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\CesDimsItem $medialiveTailor medialiveTailor
    *
    * @return $this
    */
    public function setMedialiveTailor($medialiveTailor)
    {
        $this->container['medialiveTailor'] = $medialiveTailor;
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

