<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupGigabytes' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailBackupGigabytes',
            'backups' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailBackups',
            'gigabytes' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytes',
            'id' => 'string',
            'snapshots' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshots',
            'volumes' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumes',
            'gigabytesSata' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSATA',
            'snapshotsSata' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSATA',
            'volumesSata' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSATA',
            'gigabytesSas' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSAS',
            'snapshotsSas' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSAS',
            'volumesSas' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSAS',
            'gigabytesSsd' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSSD',
            'snapshotsSsd' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSSD',
            'volumesSsd' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSSD',
            'gigabytesGpssd' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesGPSSD',
            'snapshotsGpssd' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsGPSSD',
            'volumesGpssd' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesGPSSD',
            'perVolumeGigabytes' => '\HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailPerVolumeGigabytes'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupGigabytes' => null,
        'backups' => null,
        'gigabytes' => null,
        'id' => null,
        'snapshots' => null,
        'volumes' => null,
        'gigabytesSata' => null,
        'snapshotsSata' => null,
        'volumesSata' => null,
        'gigabytesSas' => null,
        'snapshotsSas' => null,
        'volumesSas' => null,
        'gigabytesSsd' => null,
        'snapshotsSsd' => null,
        'volumesSsd' => null,
        'gigabytesGpssd' => null,
        'snapshotsGpssd' => null,
        'volumesGpssd' => null,
        'perVolumeGigabytes' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupGigabytes' => 'backup_gigabytes',
            'backups' => 'backups',
            'gigabytes' => 'gigabytes',
            'id' => 'id',
            'snapshots' => 'snapshots',
            'volumes' => 'volumes',
            'gigabytesSata' => 'gigabytes_SATA',
            'snapshotsSata' => 'snapshots_SATA',
            'volumesSata' => 'volumes_SATA',
            'gigabytesSas' => 'gigabytes_SAS',
            'snapshotsSas' => 'snapshots_SAS',
            'volumesSas' => 'volumes_SAS',
            'gigabytesSsd' => 'gigabytes_SSD',
            'snapshotsSsd' => 'snapshots_SSD',
            'volumesSsd' => 'volumes_SSD',
            'gigabytesGpssd' => 'gigabytes_GPSSD',
            'snapshotsGpssd' => 'snapshots_GPSSD',
            'volumesGpssd' => 'volumes_GPSSD',
            'perVolumeGigabytes' => 'per_volume_gigabytes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'backupGigabytes' => 'setBackupGigabytes',
            'backups' => 'setBackups',
            'gigabytes' => 'setGigabytes',
            'id' => 'setId',
            'snapshots' => 'setSnapshots',
            'volumes' => 'setVolumes',
            'gigabytesSata' => 'setGigabytesSata',
            'snapshotsSata' => 'setSnapshotsSata',
            'volumesSata' => 'setVolumesSata',
            'gigabytesSas' => 'setGigabytesSas',
            'snapshotsSas' => 'setSnapshotsSas',
            'volumesSas' => 'setVolumesSas',
            'gigabytesSsd' => 'setGigabytesSsd',
            'snapshotsSsd' => 'setSnapshotsSsd',
            'volumesSsd' => 'setVolumesSsd',
            'gigabytesGpssd' => 'setGigabytesGpssd',
            'snapshotsGpssd' => 'setSnapshotsGpssd',
            'volumesGpssd' => 'setVolumesGpssd',
            'perVolumeGigabytes' => 'setPerVolumeGigabytes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'backupGigabytes' => 'getBackupGigabytes',
            'backups' => 'getBackups',
            'gigabytes' => 'getGigabytes',
            'id' => 'getId',
            'snapshots' => 'getSnapshots',
            'volumes' => 'getVolumes',
            'gigabytesSata' => 'getGigabytesSata',
            'snapshotsSata' => 'getSnapshotsSata',
            'volumesSata' => 'getVolumesSata',
            'gigabytesSas' => 'getGigabytesSas',
            'snapshotsSas' => 'getSnapshotsSas',
            'volumesSas' => 'getVolumesSas',
            'gigabytesSsd' => 'getGigabytesSsd',
            'snapshotsSsd' => 'getSnapshotsSsd',
            'volumesSsd' => 'getVolumesSsd',
            'gigabytesGpssd' => 'getGigabytesGpssd',
            'snapshotsGpssd' => 'getSnapshotsGpssd',
            'volumesGpssd' => 'getVolumesGpssd',
            'perVolumeGigabytes' => 'getPerVolumeGigabytes'
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
        $this->container['backupGigabytes'] = isset($data['backupGigabytes']) ? $data['backupGigabytes'] : null;
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['gigabytes'] = isset($data['gigabytes']) ? $data['gigabytes'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['snapshots'] = isset($data['snapshots']) ? $data['snapshots'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['gigabytesSata'] = isset($data['gigabytesSata']) ? $data['gigabytesSata'] : null;
        $this->container['snapshotsSata'] = isset($data['snapshotsSata']) ? $data['snapshotsSata'] : null;
        $this->container['volumesSata'] = isset($data['volumesSata']) ? $data['volumesSata'] : null;
        $this->container['gigabytesSas'] = isset($data['gigabytesSas']) ? $data['gigabytesSas'] : null;
        $this->container['snapshotsSas'] = isset($data['snapshotsSas']) ? $data['snapshotsSas'] : null;
        $this->container['volumesSas'] = isset($data['volumesSas']) ? $data['volumesSas'] : null;
        $this->container['gigabytesSsd'] = isset($data['gigabytesSsd']) ? $data['gigabytesSsd'] : null;
        $this->container['snapshotsSsd'] = isset($data['snapshotsSsd']) ? $data['snapshotsSsd'] : null;
        $this->container['volumesSsd'] = isset($data['volumesSsd']) ? $data['volumesSsd'] : null;
        $this->container['gigabytesGpssd'] = isset($data['gigabytesGpssd']) ? $data['gigabytesGpssd'] : null;
        $this->container['snapshotsGpssd'] = isset($data['snapshotsGpssd']) ? $data['snapshotsGpssd'] : null;
        $this->container['volumesGpssd'] = isset($data['volumesGpssd']) ? $data['volumesGpssd'] : null;
        $this->container['perVolumeGigabytes'] = isset($data['perVolumeGigabytes']) ? $data['perVolumeGigabytes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupGigabytes'] === null) {
            $invalidProperties[] = "'backupGigabytes' can't be null";
        }
        if ($this->container['backups'] === null) {
            $invalidProperties[] = "'backups' can't be null";
        }
        if ($this->container['gigabytes'] === null) {
            $invalidProperties[] = "'gigabytes' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['snapshots'] === null) {
            $invalidProperties[] = "'snapshots' can't be null";
        }
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
    * Gets backupGigabytes
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailBackupGigabytes
    */
    public function getBackupGigabytes()
    {
        return $this->container['backupGigabytes'];
    }

    /**
    * Sets backupGigabytes
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailBackupGigabytes $backupGigabytes backupGigabytes
    *
    * @return $this
    */
    public function setBackupGigabytes($backupGigabytes)
    {
        $this->container['backupGigabytes'] = $backupGigabytes;
        return $this;
    }

    /**
    * Gets backups
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailBackups
    */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
    * Sets backups
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailBackups $backups backups
    *
    * @return $this
    */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;
        return $this;
    }

    /**
    * Gets gigabytes
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytes
    */
    public function getGigabytes()
    {
        return $this->container['gigabytes'];
    }

    /**
    * Sets gigabytes
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytes $gigabytes gigabytes
    *
    * @return $this
    */
    public function setGigabytes($gigabytes)
    {
        $this->container['gigabytes'] = $gigabytes;
        return $this;
    }

    /**
    * Gets id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 项目ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets snapshots
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshots
    */
    public function getSnapshots()
    {
        return $this->container['snapshots'];
    }

    /**
    * Sets snapshots
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshots $snapshots snapshots
    *
    * @return $this
    */
    public function setSnapshots($snapshots)
    {
        $this->container['snapshots'] = $snapshots;
        return $this;
    }

    /**
    * Gets volumes
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumes
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumes $volumes volumes
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets gigabytesSata
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSATA|null
    */
    public function getGigabytesSata()
    {
        return $this->container['gigabytesSata'];
    }

    /**
    * Sets gigabytesSata
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSATA|null $gigabytesSata gigabytesSata
    *
    * @return $this
    */
    public function setGigabytesSata($gigabytesSata)
    {
        $this->container['gigabytesSata'] = $gigabytesSata;
        return $this;
    }

    /**
    * Gets snapshotsSata
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSATA|null
    */
    public function getSnapshotsSata()
    {
        return $this->container['snapshotsSata'];
    }

    /**
    * Sets snapshotsSata
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSATA|null $snapshotsSata snapshotsSata
    *
    * @return $this
    */
    public function setSnapshotsSata($snapshotsSata)
    {
        $this->container['snapshotsSata'] = $snapshotsSata;
        return $this;
    }

    /**
    * Gets volumesSata
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSATA|null
    */
    public function getVolumesSata()
    {
        return $this->container['volumesSata'];
    }

    /**
    * Sets volumesSata
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSATA|null $volumesSata volumesSata
    *
    * @return $this
    */
    public function setVolumesSata($volumesSata)
    {
        $this->container['volumesSata'] = $volumesSata;
        return $this;
    }

    /**
    * Gets gigabytesSas
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSAS|null
    */
    public function getGigabytesSas()
    {
        return $this->container['gigabytesSas'];
    }

    /**
    * Sets gigabytesSas
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSAS|null $gigabytesSas gigabytesSas
    *
    * @return $this
    */
    public function setGigabytesSas($gigabytesSas)
    {
        $this->container['gigabytesSas'] = $gigabytesSas;
        return $this;
    }

    /**
    * Gets snapshotsSas
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSAS|null
    */
    public function getSnapshotsSas()
    {
        return $this->container['snapshotsSas'];
    }

    /**
    * Sets snapshotsSas
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSAS|null $snapshotsSas snapshotsSas
    *
    * @return $this
    */
    public function setSnapshotsSas($snapshotsSas)
    {
        $this->container['snapshotsSas'] = $snapshotsSas;
        return $this;
    }

    /**
    * Gets volumesSas
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSAS|null
    */
    public function getVolumesSas()
    {
        return $this->container['volumesSas'];
    }

    /**
    * Sets volumesSas
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSAS|null $volumesSas volumesSas
    *
    * @return $this
    */
    public function setVolumesSas($volumesSas)
    {
        $this->container['volumesSas'] = $volumesSas;
        return $this;
    }

    /**
    * Gets gigabytesSsd
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSSD|null
    */
    public function getGigabytesSsd()
    {
        return $this->container['gigabytesSsd'];
    }

    /**
    * Sets gigabytesSsd
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesSSD|null $gigabytesSsd gigabytesSsd
    *
    * @return $this
    */
    public function setGigabytesSsd($gigabytesSsd)
    {
        $this->container['gigabytesSsd'] = $gigabytesSsd;
        return $this;
    }

    /**
    * Gets snapshotsSsd
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSSD|null
    */
    public function getSnapshotsSsd()
    {
        return $this->container['snapshotsSsd'];
    }

    /**
    * Sets snapshotsSsd
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsSSD|null $snapshotsSsd snapshotsSsd
    *
    * @return $this
    */
    public function setSnapshotsSsd($snapshotsSsd)
    {
        $this->container['snapshotsSsd'] = $snapshotsSsd;
        return $this;
    }

    /**
    * Gets volumesSsd
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSSD|null
    */
    public function getVolumesSsd()
    {
        return $this->container['volumesSsd'];
    }

    /**
    * Sets volumesSsd
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesSSD|null $volumesSsd volumesSsd
    *
    * @return $this
    */
    public function setVolumesSsd($volumesSsd)
    {
        $this->container['volumesSsd'] = $volumesSsd;
        return $this;
    }

    /**
    * Gets gigabytesGpssd
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesGPSSD|null
    */
    public function getGigabytesGpssd()
    {
        return $this->container['gigabytesGpssd'];
    }

    /**
    * Sets gigabytesGpssd
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailGigabytesGPSSD|null $gigabytesGpssd gigabytesGpssd
    *
    * @return $this
    */
    public function setGigabytesGpssd($gigabytesGpssd)
    {
        $this->container['gigabytesGpssd'] = $gigabytesGpssd;
        return $this;
    }

    /**
    * Gets snapshotsGpssd
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsGPSSD|null
    */
    public function getSnapshotsGpssd()
    {
        return $this->container['snapshotsGpssd'];
    }

    /**
    * Sets snapshotsGpssd
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailSnapshotsGPSSD|null $snapshotsGpssd snapshotsGpssd
    *
    * @return $this
    */
    public function setSnapshotsGpssd($snapshotsGpssd)
    {
        $this->container['snapshotsGpssd'] = $snapshotsGpssd;
        return $this;
    }

    /**
    * Gets volumesGpssd
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesGPSSD|null
    */
    public function getVolumesGpssd()
    {
        return $this->container['volumesGpssd'];
    }

    /**
    * Sets volumesGpssd
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailVolumesGPSSD|null $volumesGpssd volumesGpssd
    *
    * @return $this
    */
    public function setVolumesGpssd($volumesGpssd)
    {
        $this->container['volumesGpssd'] = $volumesGpssd;
        return $this;
    }

    /**
    * Gets perVolumeGigabytes
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailPerVolumeGigabytes|null
    */
    public function getPerVolumeGigabytes()
    {
        return $this->container['perVolumeGigabytes'];
    }

    /**
    * Sets perVolumeGigabytes
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\QuotaDetailPerVolumeGigabytes|null $perVolumeGigabytes perVolumeGigabytes
    *
    * @return $this
    */
    public function setPerVolumeGigabytes($perVolumeGigabytes)
    {
        $this->container['perVolumeGigabytes'] = $perVolumeGigabytes;
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

